<?php

use Illuminate\Database\Seeder;

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
            'ten_dang_nhap'=>'giangnho','mat_khau'=>'giang17081999','email'=>'giang01659187582@gmail.com','hinh_dai_dien'=>'giang.png','diem_cao_nhat'=>20,'credit'=>100
        ]); 
    }
}
