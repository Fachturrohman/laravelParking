<?php

use Illuminate\Database\Seeder;

class HargaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('harga')->insert([
        [
        	'id_harga' => '1',
        	'harga' => '3000',
        	'created_at' => date('y-m-d H:i:s'),
        	'updated_at' => date('y-m-d H:i:s'),
        ],
    ]);
    }
}
