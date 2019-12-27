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
        for($i=0;$i<30;$i++)
        DB::table('chi_tiet_luot_chois')->insert([
            ["luoc_choi_id"=>1,"cau_hoi_id"=>1,"phuong_an"=>'A',"diem"=>$i*100],
            ["luoc_choi_id"=>2,"cau_hoi_id"=>2,"phuong_an"=>'A',"diem"=>$i*2000],
            ["luoc_choi_id"=>3,"cau_hoi_id"=>3,"phuong_an"=>'A',"diem"=>$i*200],
            ["luoc_choi_id"=>4,"cau_hoi_id"=>1,"phuong_an"=>'A',"diem"=>$i*1000],
            ["luoc_choi_id"=>5,"cau_hoi_id"=>2,"phuong_an"=>'A',"diem"=>$i*1000],
            ["luoc_choi_id"=>6,"cau_hoi_id"=>3,"phuong_an"=>'A',"diem"=>$i*1000],
            ["luoc_choi_id"=>7,"cau_hoi_id"=>1,"phuong_an"=>'A',"diem"=>$i*1000],
            ["luoc_choi_id"=>8,"cau_hoi_id"=>2,"phuong_an"=>'A',"diem"=>$i*1000],
            ["luoc_choi_id"=>9,"cau_hoi_id"=>3,"phuong_an"=>'A',"diem"=>$i*1000],

        ]);
    }
}
