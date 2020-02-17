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

Route::get('/', 'CardController@index')->name('index');
Route::get('/card/create', 'CardController@create')->name('create');
Route::post('/card/store', 'CardController@store')->name('store');
Route::get('/card/{card}/edit', 'CardController@edit')->name('edit');
Route::put('/card/{card}', 'CardController@update')->name('update');
