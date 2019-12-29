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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@login');
Route::get('register','HomeController@register');
Route::get('forgot','HomeController@forgot');


// Route::resource('home', 'HomeController');

// Route::get('/admin/dasbor','admin\DasborController@index');
Route::get('dasbor','admin\DasborController@index');

// Route::resource('/admin/dasbor', 'admin\DasborController');

//Barang
// Route::resource('admin.barang', 'admin\ProductsController');
// Route::resource('barang', 'admin\ProductsController');
//show All
Route::get('/barang','admin\ProductsController@index');
//Create
Route::get('/barang/create','admin\ProductsController@create');
Route::post('/barang','admin\ProductsController@store');
//read
Route::get('/barang/{product}','admin\ProductsController@show');
//Update
Route::get('/barang/{product}/edit','admin\ProductsController@edit');
Route::put('/barang/{product}','admin\ProductsController@update');
//delete
Route::delete('/barang/{product}','admin\ProductsController@destroy');
