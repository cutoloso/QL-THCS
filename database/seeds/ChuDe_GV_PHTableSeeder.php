<?php

use Illuminate\Database\Seeder;

class ChuDe_GV_PHTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
    	// $faker = Faker\Factory::create('vi_VN');
        $limit = 20;
        for ($i=0; $i < $limit; $i++) {
        	DB::table('ChuDe_GV_PH')->insert([
        		'cd_gvph_ten'=>'Chủ đề GV-PH '.$i,
                'ph_ma'=>,
                'gv_ma'=>
        	]); 
        }
    }
    }
}
