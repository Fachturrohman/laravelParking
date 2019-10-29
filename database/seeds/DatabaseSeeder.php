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
         $this->call(UsersTableSeeder::class);
         $this->call(KendaraanTableSeeder::class);
         $this->call(HargaTableSeeder::class);
         $this->call(ParkirSeederTable::class);

    }
}
