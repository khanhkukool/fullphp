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

//tạo ra các route tự động
//Route::resource('news', 'NewsController');

Route::get('news/', 'NewsController@index');
Route::get('news/create', 'NewsController@create');
Route::post('news/store', 'NewsController@store');
Route::get('news/show/{id}', 'NewsController@show');
Route::get('news/edit/{id}', 'NewsController@edit');
Route::post('news/update/{id}', 'NewsController@update');
Route::get('news/destroy/{id}', 'NewsController@destroy');