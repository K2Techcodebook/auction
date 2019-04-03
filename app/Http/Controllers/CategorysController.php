<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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


}
