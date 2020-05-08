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

//route ko có tham số
Route::get('/myname', function() {
    return "Hello , My name";
});

//tạo route có tham số
Route::get('/product/edit/{id}/{name}', function($id, $name) {
    $result = "Tham số id đang có giá trị là: $id";
    $result .= ". Tham số name có giá trị là: $name";
    return $result;
});

//Route gọi 1 view
Route::get('/list-product', function() {
    return view('list-product');
});

Route::any('/user', 'UserController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/display', 'DisplayController@display');
