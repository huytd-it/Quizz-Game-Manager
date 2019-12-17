<?php

use App\ChiTietLuotChoi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(QuanTriVienSeeder::class);
        $this->call(ThemLinhVucSeeder::class);
        $this->call(ThemNguoiChoiSeeder::class);
        $this->call(ThemGoiCreditSeeder::class);
        $this->call(ThemCauHoiSeerder::class);
        $this->call(LuotChoiSeeder::class);
        $this->call(LichSuMuaCreditSeeder::class);
        $this->call(ChiTietLuotChoiSeeder::class);


    }
}
