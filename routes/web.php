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



Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/produit', 'ProduitController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@insert');
Route::get('/admin', 'AdminController@index');
Route::get('/admin', 'AdminController@get');
/*se deconnecter*/
Route::get('/logout', 'Auth/LonginContactContrroller@index');
