<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lop;

use DB;

class LopController extends Controller
{
  public function index()
  {
  	try {
      $ds_Lop = DB::table('Lop')->get();
      return response([
        'error'=>false,
        'message'=> compact('ds_Lop')],200);
    } 
    catch (Exception $e) {
      return response([
        'error'=>true,
        'message'=> $e->getMessage()],200);
    }
  }

  public function create()
  {
  	# code...
  }

  public function store(Request $req)
  {
  	# code...
  }

  public function show($id)
  {
  	try {
      $ds_Lop = DB::table('Lop')->where('l_ma',$id)->get();
      return response([
        'error'=>false,
        'message'=> compact('ds_Lop')],200);
    } 
    catch (Exception $e) {
      return response([
        'error'=>true,
        'message'=> $e->getMessage()],200);
    }
  }

  public function edit($id)
  {
  	# code...
  }

  public function update(Request $req, $id)
  {
  	# code...
  }

  public function destroy($id)
  {
  	# code...
  }

  public function dsLopKhoahoc($khoahoc)
  {
    try {
      $ds_Lop = DB::table('Lop')->where('kh_khoaHoc',$khoahoc)->get();
      return response([
        'error'=>false,
        'message'=> compact('ds_Lop')],200);
    } 
    catch (Exception $e) {
      return response([
        'error'=>true,
        'message'=> $e->getMessage()],200);
    }
  }

  public function dsLopKhoahocKhoi($khoahoc,$khoi)
  {
    try {
      $ds_Lop = DB::table('Lop')
      ->where('kh_khoaHoc',$khoahoc)
      ->where('l_ma','like',$khoi.'%')
      ->get();
      return response([
        'error'=>false,
        'message'=> compact('ds_Lop')],200);
    } 
    catch (Exception $e) {
      return response([
        'error'=>true,
        'message'=> $e->getMessage()],200);
    }
  }
}
