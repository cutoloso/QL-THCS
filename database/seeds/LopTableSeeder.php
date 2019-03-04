<?php

use Illuminate\Database\Seeder;

class LopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('vi_VN');
    	// $khoaHoc = (array)DB::table('KhoaHoc')->get('kh_khoaHoc');
    	$khoaHoc = array('2016','2017','2018','2019');
    	// $giaoVien = (array)DB::table('GiaoVien')->get('gv_ma');
    	// $giaoVien = GiaoVien::get('gv_ma')->toArray();
        $result = DB::table('Phong')->count();
        $ma_lop=array('A','B','C','D','E','F','G','H','I');
        foreach ($khoaHoc as $kh) {
	        for ($i=1; $i <= $result/9; $i++) { 
	        	for ($j=1; $j <= 9; $j++) { 
	        		$l_ma = (5+$i).$ma_lop[$j-1];
	        		DB::table('Lop')->insert([
	        			'l_ma'=>$l_ma,
	        			'kh_khoaHoc'=>$kh,
	        			'p_ma'=>(($i*100)+$j),
	        			'gv_ma'=>$faker->numberBetween(100,130)
	        		]);
	        	}
	        }
		}
    }
}
