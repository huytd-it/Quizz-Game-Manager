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
            ["nguoi_choi_id"=>1,"goi_credit_id"=>1,"credit"=>8022,"so_tien"=>1000000]
        ]);

    }
}
