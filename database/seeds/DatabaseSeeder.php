<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ToCMTableSeeder::class);
        $this->call(TietHocTableSeeder::class);
        $this->call(PhongTableSeeder::class);
        $this->call(ThuTableSeeder::class);
        $this->call(KhoaHocTableSeeder::class);
        $this->call(MonHocTableSeeder::class);
        $this->call(HocKyTableSeeder::class);
        $this->call(QuyenTableSeeder::class);
        $this->call(GiaoVienTableSeeder::class);
        $this->call(QuanTriTableSeeder::class);

    }
}
