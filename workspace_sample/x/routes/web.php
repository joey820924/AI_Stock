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

Route::get('/home', 'stockController@dashboard');

Route::get('/stocks', 'stockController@index');

Route::get('/stock/detail/{id}', 'stockController@stock_detail');
Route::get('/stock/buy/{id}', 'stockController@buy');
Route::get('/stock/follow/{id}', 'stockController@follow');

Route::get('/mystocks', 'stockController@mystocks');
Route::get('/myfollows', 'stockController@myfollows');
Route::get('/mysubscribe', 'stockController@mysubscribe');
Route::get('/user/subscribe/2', 'stockController@user2');




Route::get('/trim', 'stockController@trim');


Route::get('/ddp', 'stockController@ddp');



