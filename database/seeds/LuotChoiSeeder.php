<?php

use Illuminate\Database\Seeder;

class LuotChoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('luot_chois')->insert([
           ['nguoi_choi_id'=>1,"so_cau"=>4,"diem"=>"41","ngay_gio"=>"21/5/2019"],
           ['nguoi_choi_id'=>2,"so_cau"=>7,"diem"=>"41","ngay_gio"=>"21/4/2019"],
           ['nguoi_choi_id'=>3,"so_cau"=>8,"diem"=>"41","ngay_gio"=>"21/3/2019"],
           ['nguoi_choi_id'=>4,"so_cau"=>9,"diem"=>"41","ngay_gio"=>"21/2/2019"],
       ]);
    }
}
