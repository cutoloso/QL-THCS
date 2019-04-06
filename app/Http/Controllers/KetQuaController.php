<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KetQuaController extends Controller
{
  public function index()
  {
    	# code...
  }

  public function create()
  {
    	# code...
  }

  public function store(Request $req)
  {
    	# code...
  }

  public function show($hs_ma,$hk_hocKy)
  {
    if (idate("m")<6) {
      $hk_namHoc = (string)(idate("Y")-1).'-'.(string)idate("Y");
    }
    else{
      $hk_namHoc = (string)idate("Y").'-'.(string)(idate("Y")+1);
    }
    try {
      $ds_KetQua = DB::table('KetQua')
      ->where('hs_ma',$hs_ma)
      ->where('hk_hocKy',$hk_hocKy)
      ->where('hk_namHoc',$hk_namHoc)
      ->get();
      return response([
        'error'   => false,
        'message' => compact('ds_KetQua')
      ],200);
    } 
    catch (Exception $e) {
      return response([
        'error'   => false,
        'message' => "Có lỗi"
      ],200);
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
  public function import()
  {
    try {
      Excel::import(new TkbImport, request()->file('fileTKB'));
      return response([
        'error'=>false,
        'message'=> "Upload file điểm thành công"],200);
    } 
    catch (\Exception $e) {
      return response([
        'error'=>true,
        'message'=> "Có lỗi khi up file, vui lòng kiểm tra lại file !!!"],200);
    }
  }

  public function getDiemTBCN($hs_ma,$hk_hocKy)
  {
    try {

      if (idate("m")<6) {
        $hk_namHoc = (string)(idate("Y")-1).'-'.(string)idate("Y");
      }
      else{
        $hk_namHoc = (string)idate("Y").'-'.(string)(idate("Y")+1);
      }
      $ds_diem = DB::table('KetQua')
      ->where('hs_ma',$hs_ma)
      ->where('hk_namHoc',$hk_namHoc)
      ->where('hk_hocKy',$hk_hocKy)
      ->get();
      $diem=0;
      $count = 0;
      foreach ($ds_diem as $d) {
        $count = $count + $d->kq_heSo;
        $diem = $diem + $d->kq_heSo*$d->kq_diem;
      }

      if ($count == 0) {
        $diemTBCN = 0;
      }
      else{
        $diemTBCN = $diem/$count;
      }
      return response([
        'error'=>false,
        'message'=> compact('diemTBCN')]);
    } 
    catch (Exception $e) {
      return response([
        'error'=>true,
        'message'=> "Có lỗi"],200);
    }
  }
}
