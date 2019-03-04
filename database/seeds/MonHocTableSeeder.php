<?php

use Illuminate\Database\Seeder;

class MonHocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('MonHoc')->insert([
        	['mh_ma'=>'T6','mh_ten'=>'Toán 6'],
        	['mh_ma'=>'T7','mh_ten'=>'Toán 7'],
        	['mh_ma'=>'VL6','mh_ten'=>'Lý 6'],
        	['mh_ma'=>'HH6','mh_ten'=>'Hóa 6'],
        	['mh_ma'=>'SH6','mh_ten'=>'Sinh 6'],
        	['mh_ma'=>'NV6','mh_ten'=>'Văn 6'],
        	['mh_ma'=>'LS6','mh_ten'=>'Sử 6'],
        	['mh_ma'=>'DL6','mh_ten'=>'Địa 6']
        ]);
    }
}
