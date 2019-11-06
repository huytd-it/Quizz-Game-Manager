<?php

use Illuminate\Database\Seeder;

class ThemGoiCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('goi_credit')->insert([
        ['ten_goi'=>'Gói A','credit'=>100,'so_tien'=>5003000],
        ['ten_goi'=>'Gói B','credit'=>150,'so_tien'=>5020000],
        ['ten_goi'=>'Gói C','credit'=>180,'so_tien'=>5020000],
        ['ten_goi'=>'Gói D','credit'=>200,'so_tien'=>5100000]
      ]);
    }
}
