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
	
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'quan-tri','middleware'=>'auth'],function (){
	Route::get('/', function () {
		return view('layouts.master');
	})->name('quan-tri');
	
	Route::apiResource('giao-vien', 'GiaoVienController');
	Route::get('dsgiaovien',function(){
		return view('giaoVien.index');
	})->name('dsgiaovien');

	Route::apiResource('to-cm', 'ToCMController');

	Route::apiResource('lop', 'LopController');
	Route::get('lop/{khoahoc}/khoa-hoc/{khoi}/khoi','LopController@dsLopKhoahocKhoi');
	Route::get('lop/{khoahoc}/khoa-hoc','LopController@dsLopKhoahoc');
	Route::get('dslop',function(){
		return view('lop.index');
	})->name('dslop');

	Route::apiResource('hoc-sinh', 'HocSinhController');
	Route::get('dshocsinh',function(){
		return view('hocSinh.index');
	})->name('dshocsinh');
	Route::get('hoc-sinh/{khoahoc}/{khoi}','HocSinhController@dsHs');

	Route::apiResource('khoa-hoc', 'KhoaHocController');
	Route::get('dskhoahoc',function(){
		return view('khoaHoc.index');
	})->name('dskhoahoc');

	Route::apiResource('phu-huynh', 'PhuHuynhController');

	Route::apiResource('phong', 'PhongController');
	Route::get('dsphong',function(){
		return view('phong.index');
	})->name('dsphong');

	Route::get('gop-y/{loai_chude}/{cd_ma}','GopYController@show');
	Route::get('dsgopy/{loai_chude}/{cd_ma}','GopYController@view');
	Route::post('gop-y','GopYController@store');

	Route::apiResource('chu-de-gop-y', 'ChuDeController');
	Route::get('chu-de-gop-y/{cd_loai}/{cd_ma}', 'ChuDeController@view');
	Route::get('dschude',function (){
		return view('gopY.index');
	})->name('dschude');

	// Route::apiResource('thong-bao-truong', 'ThongBaoTruongController');
	Route::get('dsthongbaotruong',function (){
		return view('thongBaoTruong.index');
	})->name('dsthongbaotruong');

	Route::resource('thong-bao-truong', 'ThongBaoTruongController')->names([
		'create' => 'ThongBaoTruongController.create',
		'store'=>'ThongBaoTruongController.store',
		'update'=>'ThongBaoTruongController.update'
	]);
	
	Route::apiResource('thong-bao-lop', 'ThongBaoLopController');
	Route::get('dsthongbaolop',function (){
		return view('thongBaoLop.index');
	})->name('dsthongbaolop');

	Route::apiResource('tai-khoan', 'UserController');
	Route::get('dstaikhoan',function (){
		return view('taiKhoan.index');
	})->name('dstaikhoan');
});

Route::get('test',function ()
{
	return view('upfile');
});
Route::post('test','UpFileController@store');

Route::get('pagination',function ()
{
	return view('pagination');
});