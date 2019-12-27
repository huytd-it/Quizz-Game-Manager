<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ThemNguoiChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nguoi_chois')->insert([
            ['ten_dang_nhap'=>'giangnho','mat_khau'=>Hash::make(12345),'email'=>'giang01659187582@gmail.com','hinh_dai_dien'=>'giang.png','diem_cao_nhat'=>20,'credit'=>100],
            ['ten_dang_nhap'=>'yukihuy','mat_khau'=>Hash::make(12345),'email'=>'giang01659187582@gmail.com','hinh_dai_dien'=>'giang.png','diem_cao_nhat'=>20,'credit'=>100],
            ['ten_dang_nhap'=>'hungLOL','mat_khau'=>Hash::make(12345),'email'=>'giang01659187582@gmail.com','hinh_dai_dien'=>'giang.png','diem_cao_nhat'=>20,'credit'=>100],
            ['ten_dang_nhap'=>'LinhTinh','mat_khau'=>Hash::make(12345),'email'=>'giang01659187582@gmail.com','hinh_dai_dien'=>'giang.png','diem_cao_nhat'=>20,'credit'=>100]
        ]);
    }
}
