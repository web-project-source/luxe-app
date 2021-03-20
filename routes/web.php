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

Route::get('/', 'App\Http\Controllers\MainController@index');
Route::get('login', 'App\Http\Controllers\MainController@login')->name('login');
Route::post('checklogin', 'App\Http\Controllers\MainController@checklogin');
Route::get('successlogin', 'App\Http\Controllers\MainController@successlogin');
Route::get('logout', 'App\Http\Controllers\MainController@logout');
Route::get('feedback', 'App\Http\Controllers\MainController@feedback');
Route::get('contact', 'App\Http\Controllers\MainController@contact');
Route::post('create','App\Http\Controllers\UserController@create'); 
Route::get('registration', 'App\Http\Controllers\UserController@registration');

Route::get('vieworders','App\Http\Controllers\OrderController@vieworders')->middleware('auth');
Route::post('edit/{id}','App\Http\Controllers\OrderController@edit')->middleware('auth');
Route::get('edit/{id}','App\Http\Controllers\OrderController@show')->middleware('auth');
Route::get('viewproducts','App\Http\Controllers\ProductController@viewproducts')->middleware('auth');
Route::get('editproduct/{id}','App\Http\Controllers\ProductController@show')->middleware('auth');
Route::get('neworder1', 'App\Http\Controllers\ProductController@neworder1')->middleware('auth');
Route::post('createorder1','App\Http\Controllers\ProductController@createorder1')->middleware('auth');

Route::group(['middleware' => ['RolesAuth']], function () { 
Route::get('neworder', 'App\Http\Controllers\OrderController@neworder')->middleware('auth');
Route::post('createorder','App\Http\Controllers\OrderController@createorder')->middleware('auth');
Route::get('newproduct', 'App\Http\Controllers\ProductController@newproduct')->middleware('auth');
Route::post('createproduct','App\Http\Controllers\ProductController@createproduct')->middleware('auth');
});
