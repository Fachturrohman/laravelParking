<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	[
        		'id' => '1',
        		'name' => 'admin',
        		'email' => 'admin@sekolahan.id',
        		'password' => bcrypt('admin'),
        		'created_at' => date('y-m-d H:i:s'),
        		'updated_at' => date('y-m-d H:i:s'),
        		'admin' => '1',
        	],
        	[
        		'id' => '2',
        		'name' => 'user',
        		'email' => 'user@sekolahan.id',
        		'password' => bcrypt('user'),
        		'created_at' => date('y-m-d H:i:s'),
        		'updated_at' => date('y-m-d H:i:s'),
        		'admin' => '0',
        	],
        ]);
    }
}
