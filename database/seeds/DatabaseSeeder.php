<?php

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
        $this->call(LuotChoiSeeder::class);
        $this->call(QuanTriVienSeeder::class);
        $this->call(ThemGoiCreditSeeder::class);
        $this->call(ThemLinhVucSeeder::class);
    }
}
