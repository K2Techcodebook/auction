<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\items;

class ItemsController extends Controller
{
 
 //get prodout   //

 public function getItems(){
 $itmes = items::all();


 }


}
