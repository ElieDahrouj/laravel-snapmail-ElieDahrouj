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


Route::get('/', 'MessageController@create');
Route::post('/','MessageController@store');
Route::get('/email','MessageController@mail');
Route::get('/{code}','MessageController@destroy');
