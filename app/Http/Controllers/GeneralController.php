<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
class GeneralController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
      $this->middleware('guest:admin');
     $this->middleware('guest:business');
     $this->middleware('guest:affiliate');
  }


    public function profile(Request $req)
 {

 }

}
