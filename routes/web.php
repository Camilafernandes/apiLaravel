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
<<<<<<< HEAD
Route::group(array('prefix' => 'apiLaravel'), function()
{

  Route::get('/', function () {
      return response()->json(['message' => 'API Laravel', 'status' => 'Connected']);;
  });

  Route::resource('users', 'UsersController');
});

Route::get('/', function () {
    return redirect('apiLaravel');
=======

Route::get('/', function () {
    return view('welcome');
>>>>>>> fd6900e3634ad8c2f660954099b89459d41cc9a3
});
