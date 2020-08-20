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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/array','ArrayController@index');

Route::get('/register', function () {
    return view('register');
});

Route::get('/registers','RegisterController@index')->name('registers');
Route::post('/registers','RegisterController@store')->name('save');
Route::get('/registers/{id}','RegisterController@edit')->name('edit');
Route::put('/registers/{id}','RegisterController@update')->name('update');
Route::delete('/registers/{id}','RegisterController@destroy')->name('destroy');

//Route::patch('/registers/{id}','RegisterController@deleteup')->name('deleteup');