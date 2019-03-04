<?php

use Illuminate\Database\Seeder;

class QuyenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Quyen')->insert([
        	['q_ma'=>1,'q_ten'=>'Quản trị'],
        	['q_ma'=>2,'q_ten'=>'Giáo viên'],
        	['q_ma'=>3,'q_ten'=>'Học sinh'],
        	['q_ma'=>4,'q_ten'=>'Phụ huynh']
        ]);
    }
}
