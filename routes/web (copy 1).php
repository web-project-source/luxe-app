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
    return view('login');
});
Route::get('/main', 'App\Http\Controllers\MainController@index');
Route::post('/main/checklogin', 'App\Http\Controllers\MainController@checklogin');
Route::get('main/successlogin', 'App\Http\Controllers\MainController@successlogin');
Route::get('main/logout', 'App\Http\Controllers\MainController@logout');
Route::get('feedback', 'App\Http\Controllers\MainController@feedback');
Route::get('contact', 'App\Http\Controllers\MainController@contact');
Route::post('create','App\Http\Controllers\UserController@create'); 
Route::get('registration', 'App\Http\Controllers\UserController@registration');
Route::get('neworder', 'App\Http\Controllers\OrderController@neworder');
Route::post('createorder','App\Http\Controllers\OrderController@createorder');
Route::get('vieworders','App\Http\Controllers\OrderController@vieworders');
Route::post('edit/{id}','App\Http\Controllers\OrderController@edit');
Route::get('edit/{id}','App\Http\Controllers\OrderController@show');
Route::get('viewproducts','App\Http\Controllers\ProductController@viewproducts');
Route::get('editproduct/{id}','App\Http\Controllers\ProductController@show');
Route::get('neworder1', 'App\Http\Controllers\ProductController@neworder1');
Route::post('createorder1','App\Http\Controllers\ProductController@createorder1');

Route::group(['middleware' => ['RolesAuth']], function () { 

});
