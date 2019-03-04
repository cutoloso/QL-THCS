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
Route::group(['prefix'=>'admin'],function (){
	Route::get('/', function () {
		return view('layouts.master');
	})->name('admin.home');
});

Route::apiResource('giao-vien', 'GiaoVienController');
Route::get('dsgiaovien',function(){
	return view('giaoVien.index');
});

Route::apiResource('to-cm', 'ToCMController');
Route::get('dstocm',function(){
	return view('toCM.index');
});

Route::apiResource('hoc-sinh', 'HocSinhController');
Route::get('dshocsinh',function(){
	return view('hocSinh.index');
});