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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('login','HomeController@login');
// Route::post('login','HomeController@loginPost');
// Route::get('register','HomeController@registerview');
// Route::post('register','HomeController@registerPost');
// Route::get('logout','HomeController@logout');
// Route::get('forgot','HomeController@forgot');

Route::group(['middleware' => ['auth','cekakses']], function () {
    //anggrek
    //show All
    Route::get('/anggrek','admin\AnggreksController@index');
    //Create
    Route::get('/create','admin\AnggreksController@create');
    Route::post('/anggrek','admin\AnggreksController@store');
    //read
    Route::get('/anggrek/{id}','admin\AnggreksController@show');
    // Update
    // Route::get('/anggrek/{id}/edit','admin\AnggreksController@edit');
    Route::put('/anggrek/{id}','admin\AnggreksController@update');
    // delete
    Route::delete('/anggrek/{id}','admin\AnggreksController@destroy');

    //konsumen
    //show All
    Route::get('/konsumen','admin\KonsumenController@index');
    //Create
    Route::get('/create','admin\KonsumenController@create');
    Route::post('/konsumen','admin\KonsumenController@store');
    //read
    Route::get('/konsumen/{id}','admin\KonsumenController@show');
    // Update
    // Route::get('/konsumen/{id}/edit','admin\AnggreksController@edit');
    Route::put('/konsumen/{id}','admin\KonsumenController@update');
    // delete
    Route::delete('/konsumen/{id}','admin\KonsumenController@destroy');

    //cemilan
    //show All
    Route::get('/cemilan','admin\CemilansController@index');
    //Create
    Route::post('/cemilan','admin\CemilansController@store');
    //read
    Route::get('/cemilan/{id}','admin\CemilansController@show');
    // Update
    Route::put('/cemilan/{id}','admin\CemilansController@update');
    // delete
    Route::delete('/cemilan/{id}','admin\CemilansController@destroy');


    Route::prefix('admin')->group(function(){
        Route::get('/', function () {
            return view('admin.dasbor.main');
         })->name('admin.home');

        // //anggrek
        // Route::prefix('anggrek')->group(function (){

        // });
        // //konsumen
        // Route::prefix('konsumen')->group(function (){
        //     // show All
        //     Route::get('/','admin\KonsumenController@index')->name('admin.konsumen');
        //     //Create
        //     // Route::get('/create','admin\AnggreksController@create')->name('admin.anggrek.create');
        //     Route::post('/','admin\KonsumenController@store')->name('admin.konsumen');
        //     //read
        //     Route::get('/read/{id}','admin\KonsumenController@show');
        //     //Update
        //     Route::get('/edit/{id}','admin\KonsumenController@show')->name('admin.konsumen.edit');
        //     // Route::put('/{id}','admin\KonsumenController@update')->name('admin.konsumen.{id}');
        //     // Route::put('/edit/{id}','admin\KonsumenController@update');
        //     Route::post('/edit/{id}','admin\KonsumenController@update');
        //     //delete
        //     // Route::delete('/anggrek/{product}','admin\KonsumenController@destroy')->name('admin.anggrek');
        //     Route::delete('/{id}','admin\KonsumenController@destroy');
        // });
    });
});

// //show All
// Route::get('/anggrek','admin\AnggreksController@index');
// //Create
// Route::get('/create','admin\AnggreksController@create');
// Route::post('/anggrek','admin\AnggreksController@store');
// //read
// Route::get('/anggrek/{id}','admin\AnggreksController@show');
// // Update
// // Route::get('/anggrek/{id}/edit','admin\AnggreksController@edit');
// Route::put('/anggrek/{id}','admin\AnggreksController@update');
// // delete
// Route::delete('/anggrek/{id}','admin\AnggreksController@destroy');

Route::get('/penjualan','admin\PenjualanController@index');

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





