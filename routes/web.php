<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/clear-cache', function() {
   $exitCode =  Illuminate\Support\Facades\Artisan::call('cache:clear');
    $exitCode = Illuminate\Support\Facades\Artisan::call('route:clear');
    $exitCode = Illuminate\Support\Facades\Artisan::call('config:clear');
    return $exitCode;
    // return what you want
});

Route::post('/register_new_user', 'Auth\RegisterController@createAffiliate')->name('register_new_user');

Route::post('/login', 'Auth\LoginController@affiliateLogin')->name('log_affiliate');




Route::group(['middleware'=>'auth'], function () {

Route::post('/updateProfile', 'HomeController@updateProfile')->name('updateProfile');
Route::post('/uploadItem', 'ItemsController@uploadItem')->name('uploadItem');
Route::get('/item/{name?}/{id?}', 'HomeController@load_items')->name('view_items');

    //Get
Route::get('/items', 'ItemsController@index')->name('items');
Route::get('/manage-items', 'ItemsController@manageItems')->name('manage-items');
Route::get('/add-items', 'ItemsController@addItems')->name('add-items');
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::get('/profile', 'HomeController@profile')->name('profile');


//Base on user level for now ignore

	Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);

	Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);

	Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);

	//Post
  Route::post('/Update_profile', 'HomeController@Update_profile')->name('Update_profile');
});


//Admin Middleware Only
Route::group(['middleware'=>'check-permission:admin|superadmin'], function () {
  Route::get('/Category', 'CategorysController@view')->name('Category');
  Route::post('/store_industry','CategorysController@store_industry')->name('store_industry');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
