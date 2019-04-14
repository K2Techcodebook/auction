<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Categorys;

class CategorysController extends Controller
{
  /**
 * Create a new controller instance.
 *
 * @return void
 */
  public function __construct()
  {
      $this->middleware('auth');
  }


  public function view()
  {
    return view('pages.category');
  }

  public function store_industry(Request $request)
  {
   foreach ($request->catname as $cat_name)
   {
      $post = Categorys::create(array(
       'categogry_name' => $cat_name
       // 'author' => Auth::user()->id
       ));
        }
        $message ='Post has been successfully added!';
        return redirect()->back()->with('status', $message);
}

}
