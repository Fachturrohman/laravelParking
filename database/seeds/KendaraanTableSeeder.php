<?php

use Illuminate\Database\Seeder;

class KendaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
        [
        	'id_kendaraan' => '1',
        	'jenis' => 'Mobil',
        	'created_at' => date('y-m-d H:i:s'),
        	'updated_at' => date('y-m-d H:i:s'),
        ],
        [
        	'id_kendaraan' => '2',
        	'jenis' => 'Motor',
        	'created_at' => date('y-m-d H:i:s'),
        	'updated_at' => date('y-m-d H:i:s'),
        ],
        ]);
    }
}
