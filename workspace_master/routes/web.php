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

Route::match(array('GET','POST'),'/home', 'stockController@dashboard');

Route::match(array('GET','POST'),'/stocks', 'stockController@index');

Route::match(array('GET','POST'),'/stock/detail/{id}', 'stockController@stock_detail');
Route::match(array('GET','POST'),'/stock/buy/{id}', 'stockController@buy');
Route::match(array('GET','POST'),'/stock/follow/{id}', 'stockController@follow');

Route::match(array('GET','POST'),'/mystocks', 'stockController@mystocks');
Route::match(array('GET','POST'),'/myfollows', 'stockController@myfollows');
Route::match(array('GET','POST'),'/mysubscribe', 'stockController@mysubscribe');
Route::match(array('GET','POST'),'/user/subscribe/2', 'stockController@user2');

Route::match(array('GET','POST'),'/stock/detailcode/{code}','stockController@stockcode_detail');

Route::match(array('GET','POST'),'/trim', 'stockController@trim');


Route::match(array('GET','POST'),'/ddp', 'stockController@ddp');




