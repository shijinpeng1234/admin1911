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
Route::get('/login','Goods\LongController@one');
Route::get('login2','Goods\LoginController@two');


Route::get('login4','Goods\LoginController@four');
Route::get('login5','Goods\LoginController@five');