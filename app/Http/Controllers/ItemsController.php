<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;
use App\Models\items_image;
use App\Models\Categorys;

class ItemsController extends Controller
{
public $time;

      /**
 * Create a new controller instance.
 *
 * @return void
 */
public function __construct()
{
    $this->middleware('auth');
    $this->time = time();
}

// all items
public function index(){ return Categorys::with('items')->get(); }

 //show items
 public function manageItems(){

 $items = items::all();

 return view('pages.manageItems')->with('items',$items);

 }

 //get prodout   //

 public function addItems(){

  //get the products catergories

 $categories = Categorys::all();

 return view('pages.addItems')->with('categories',$categories);


 }



//upload product
public function uploadItem(Request $request){


 $this->validate($request, [

    'category_id' => ['required', 'string'],
    'item_name' => ['required', 'string'],
    'bid' => ['required','numeric'],
    'start_time' => ['required', 'string'],
    'end_time' => ['required', 'string'],
    'description' => ['required', 'string'],
    'file.*' => ['image', 'nullable','max:1999'],

]);




 //check if start_time is greater than time

 if(strtotime($request->input('start_time')) <= $this->time){

   return redirect()->back()->with('error','Start time must be ahead of current time');
 }


 //check the start time and end time
 if(strtotime($request->input('end_time')) <=  strtotime($request->input('start_time'))){

   return redirect()->back()->with('error','Start time must be ahead of end time');

}






//save the data to the db

  $items = items::create([
  'item_name' => $request['item_name'],
  'category_id' => $request['category_id'],
  'bid_token' => $request['bid'],
  'start_time' => strtotime($request['start_time']),
  'end_time' => strtotime($request['end_time']),
  'description' => $request['description'],

  ]);



//try to upload item image
if($request->hasFile('file')){

foreach($request->file as $file){

//get the file name

$fileName =  $this->time.$file->getClientOriginalName();

//store the file

$file->storeAs('public/items',$fileName);

//save the image link
$items->itemsImages()->create(['image'=>$fileName]);


}







}








 return redirect()->back()->with('success','Success! New item added');

}


}
