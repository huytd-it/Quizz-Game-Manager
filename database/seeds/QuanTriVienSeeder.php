<?php

use Illuminate\Database\Seeder;

class QuanTriVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\QuanTriVien::create([
            'ten_dang_nhap'=>'admin',
            'mat_khau'=>Hash::make(12345),
            'hoten'=>'Trần Đình Huy',

        ]);
    }
}
