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
        for($i=0;$i<130;$i++){
            DB::table('luot_chois')->insert([
                ['nguoi_choi_id'=>1,"so_cau"=>$i+4,"diem"=>$i+"3000","ngay_gio"=>"21/5/2019"],
                ['nguoi_choi_id'=>2,"so_cau"=>$i+7,"diem"=>$i+"200","ngay_gio"=>"21/4/2019"],
                ['nguoi_choi_id'=>3,"so_cau"=>$i+1,"diem"=>$i+"1000","ngay_gio"=>"21/3/2019"],
                ['nguoi_choi_id'=>4,"so_cau"=>$i+9,"diem"=>$i+"4000","ngay_gio"=>"1/12/2019"],

            ]);
        }

    }
}
