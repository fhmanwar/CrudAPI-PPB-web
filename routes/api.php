<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->group( function () {
// });

Route::post('login','Api\KonsumensApiController@login');
Route::post('register','Api\KonsumensApiController@register');
Route::get('me','Api\KonsumensApiController@me')->middleware('auth:api');

Route::get('apikonsumen','Api\KonsumensApiController@getKonsumen');

// Route::resource('barang', 'Api\ProductsApiController');

//anggrek
// Route::resource('apianggrek', 'Api\AnggreksApiController');
//show All
Route::get('apianggrek','Api\AnggreksApiController@index');
// Route::post('/apianggrek','Api\AnggreksApiController@store');
// Route::get('/apianggrek/{product}','Api\AnggreksApiController@show');
// Route::put('/apianggrek/{product}','Api\AnggreksApiController@update');
// Route::delete('/apianggrek/{product}','Api\AnggreksApiController@destroy');

Route::get('apicemilan','Api\CemilansApiController@index');

Route::get('apiorder','Api\OrdersApiController@index');
Route::post('apiorder','Api\OrdersApiController@store');


