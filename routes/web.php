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
Route::group(array('prefix' => 'apiLaravel'), function()
{

  Route::get('/', function () {
      return response()->json(['message' => 'API Laravel', 'status' => 'Connected']);;
  });

  Route::resource('users', 'UsersController');
});

Route::get('/', function () {
    return redirect('apiLaravel');
});
