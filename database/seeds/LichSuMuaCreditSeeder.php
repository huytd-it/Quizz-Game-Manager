<?php

use Illuminate\Database\Seeder;

class LichSuMuaCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lich_su_mua_credits')->insert([
            ['id'=>1,"nguoi_choi_id"=>54,"goi_credit_id"=>4151,"credit"=>8022,"so_tien"=>1000000]
        ]);
 
    }
}
