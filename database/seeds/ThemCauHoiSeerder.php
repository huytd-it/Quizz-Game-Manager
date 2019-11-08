<?php

use Illuminate\Database\Seeder;

class ThemCauHoiSeerder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cau_hois')->insert([
            'noi_dung'=>'1 + 1 = ?',"id_linh_vuc"=>1,'phuong_an_A'=>'3','phuong_an_B'=>'4','phuong_an_C'=>'5','phuong_an_D'=>'2','dap_an'=>'2'
        ]);
    }
}
