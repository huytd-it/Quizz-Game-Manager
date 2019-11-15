<?php

use Illuminate\Database\Seeder;


class ChiTietLuotChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chi_tiet_luot_chois')->insert([
            ["luoc_choi_id"=>1,"cau_hoi_id"=>1,"phuong_an"=>'A',"diem"=>4],
            ["luoc_choi_id"=>2,"cau_hoi_id"=>2,"phuong_an"=>'A',"diem"=>4],
            ["luoc_choi_id"=>3,"cau_hoi_id"=>3,"phuong_an"=>'A',"diem"=>4]
        ]);
    }
}
