<?php

namespace App\Imports;

use App\KetQua;
use Maatwebsite\Excel\Concerns\ToModel;

class KetQuaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new KetQua([
            'hs_ma'       => (string)$row[0],
            'hk_hocKy'    => (string)$row[1],
            'hk_namHoc '  => (string)$row[2],
            'mh_ma '      => (string)$row[3],
            'kq_lan '     => (int)$row[4],
            'kq_Diem '    => (float)$row[5]
        ]);
    }
}
