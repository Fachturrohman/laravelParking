<?php

use Illuminate\Database\Seeder;

class ParkirSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_parkir')->insert([
        	[
        		'id_parkir' => '1',
        		'nama' => 'Fachtur',
        		'plat' => 'BM 8765 NDM',
        		'tanggal' => date('y-m-d'),
        		'harga' => '3000',
        		'merk' => 'Suzuki',
        		'id_kendaraan' => '1',
        		'created_at' => date('y-m-d H:i:s'),
        		'updated_at' => date('y-m-d H:i:s'),
        	],
        	[
        		'id_parkir' => '2',
        		'nama' => 'Rohman',
        		'plat' => 'L 5678 UCI',
        		'tanggal' => date('y-m-d'),
        		'harga' => '5000',
        		'merk' => 'Datsun',
        		'id_kendaraan' => '2',
        		'created_at' => date('y-m-d H:i:s'),
        		'updated_at' => date('y-m-d H:i:s'),
        	],
        ]);
    }
}
