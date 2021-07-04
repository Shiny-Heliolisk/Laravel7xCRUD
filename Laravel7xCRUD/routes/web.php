<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','Backend\DashboardController@index');

Route::get('/backend/products/index','Backend\ProductsController@index');
Route::get('/backend/products/create','Backend\ProductsController@create');
Route::get('/backend/products/edit/{id}','Backend\ProductsController@edit');
Route::get("/backend/products/delete/{id}", "Backend\ProductsController@delete");

Route::post('backend/product/store','Backend\ProductsController@store');

Route::post('backend/products/update/{id}','Backend\ProductsController@update');

Route::post('backend/products/destroy/{id}',"Backend\ProductsController@destroy");  

//category
Route::get('/backend/category/index','Backend\CategController@cIndex');
Route::get('/backend/category/create','Backend\CategController@cCreate');
Route::post('/backend/category/store','Backend\CategController@cStore');