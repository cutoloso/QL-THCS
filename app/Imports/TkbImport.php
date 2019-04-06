<?php

namespace App\Imports;

use App\TKB;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
class TkbImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    protected function getGV($kh_khoaHoc, $l_ma, $mh_ma)
    {   
    	$gv = DB::table('Day')
            ->where('kh_khoaHoc',$kh_khoaHoc)
            ->where('l_ma',$l_ma)
            ->where('mh_ma',$mh_ma)
            ->first(['gv_ma']);
        return $gv==null? null:$gv->gv_ma;
    }

    public function model(array $row)
    {
        return new TKB([
            'kh_khoaHoc'    => (string)$row[0],
            'l_ma'          => (string)$row[1],
            'mh_ma'         => (string)$row[2],
            'th_stt'        => (int)$row[3],
            'th_buoi'       => (strtolower($row[4])),
            't_ma'          => (string)$row[5],
            'hk_hocKy'      => (string)$row[6],
            'hk_namHoc'     => (string)$row[7],
            'gv_ma'         => TkbImport::getGV((string)$row[0],(string)$row[1],(string)$row[2])
            // 'tkb_moTa'      => (string)$row['tkb_moTa'],
        ]);
    }

}
