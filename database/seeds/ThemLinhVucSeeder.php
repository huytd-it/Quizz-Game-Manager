<?php

use Illuminate\Database\Seeder;

class ThemLinhVucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linh_vuc')->insert([
            ['ten_linh_vuc'=>'Toán'],
            ['ten_linh_vuc'=>'Lý'],
            ['ten_linh_vuc'=>'Hóa'],
            ['ten_linh_vuc'=>'Lịch sữ'],
            ['ten_linh_vuc'=>'Địa lý']
        ]);
    }
}
