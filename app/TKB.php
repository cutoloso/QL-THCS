<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TKB extends Model
{
    protected $table = 'TKB';
    protected $guarded = [];
    protected $fillable = ['mh_ma','th_stt','th_buoi','t_thu','l_ma','hk_hocKy','hk_namHoc'];
    protected $primaryKey = ['mh_ma','th_stt','th_buoi','t_thu','l_ma','hk_hocKy','hk_namHoc'];
    public $incrementing = false;
}
