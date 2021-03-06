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

Route::get('/','App\Http\Controllers\UserController@Index');
Route::get('/create','App\Http\Controllers\UserController@create');
Route::post('/store','App\Http\Controllers\UserController@store')->name('store');
Route::get('/edit/{id}','App\Http\Controllers\UserController@edit')->name('edit');
Route::post('/update/{id}','App\Http\Controllers\UserController@update')->name('update');
Route::get('/delete/{id}','App\Http\Controllers\UserController@delete')->name('delete');

