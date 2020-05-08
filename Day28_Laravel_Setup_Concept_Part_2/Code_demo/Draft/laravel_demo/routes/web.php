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

//Route không có tham số
Route::get('/myname',function () {
   return "Hello k";
});

//Tạo route có tham số
Route::get('/product/edit/{id}/{name}', function ($id, $name){
   $result = "Tham số id đang có giá trị là: $id";
   $result .= ". Tham số name có giá trị là $name";
   return $result;
});

//Route gọi một view

Route::get('/list-product',function (){
    return view('list-product');
});

Route::any('/user', 'UserController@show');

Route::get('/display','DisplayController@display');

//Tạo các route cho CRUD news
//Route hiển thị danh sách tin tức
Route::get('news/index','NewsController@index');
//Route hiển thị form thêm mới
//Khai báo name name giúp dễ nhớ hơn trong trường hợp url quá dài
Route::get('news/create','NewsController@create')->name('news.create');
//route xử lý khi submit form
Route::post('news/store','NewsController@store');
//Route hiển thi form edit
Route::get('news/edit/{id}','NewsController@edit');
//Xử lý update khi submit form edit
Route::post('news/update/{id}','NewsController@update');

//route hiển thị chi tiết 1 tin tức
Route::get('news/show/{id}','NewsController@show');

//xóa 1 tin tức
Route::post('/news/delete/{id}', 'NewsController@delete');


//define các route cho chức năng CRUD danh mục
Route::get('/category', 'CategoryController@index');

//route liên quan đến thêm mới
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/store', 'CategoryController@store');

//route liên quan đến cập nhật
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/update/{id}', 'CategoryController@update');

//route chi tiết danh mục
Route::get('/category/show/{id}', 'CategoryController@show');

//route xóa danh mục
Route::any('/category/delete/{id}', 'CategoryController@delete');


//Laravel còn có các phương thức form khác là PUT, PATCH,
//DELETE
//<input type='hidden' name='_method' value='DELETE'