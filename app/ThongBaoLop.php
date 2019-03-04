<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongBaoLop extends Model
{
    protected $table = 'ThongBaoLop';
    protected $guarded = [];
    protected $fillable = ['tbl_ma','tbl_ngayBD','tbl_ngayKT','tbl_noiDung','l_ma','gv_ma'];
    protected $primaryKey = ['tbl_ma'];
    protected $date = ['tbl_ngayBD','tbl_ngayKT'];
    protected $dateFormat = 'Y-m-d H:i:s';
    public $incrementing = false;
}
