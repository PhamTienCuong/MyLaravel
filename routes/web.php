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



Route::get('GoiTen',Function(){
  return redirect()->route('Fukyou');
});



Route::group(['prefix'=>'MyGroup'],function(){
  Route::get('KhoaHoc',function(){
    return "xin chao cac ban";
  })->name('Fukyou');

  Route::get('CuongPham/{ten}',function($ten){
    echo "<h1>Khoa Hoc - Laravel</h1>".$ten;
  })->where(['ten'=>'[a-zA-Z]+']);
});

Route::get('Controller','MyController@xinchao');

Route::get('ThamSo/{ten}','MyController@khoahoc');

Route::get('GetUrl','MyController@GetUrl');

Route::get('getForm',function(){
  return view('postForm');
});

Route::post('postForm',['as'=>'postForm','uses'=>'MyController@postForm']);
