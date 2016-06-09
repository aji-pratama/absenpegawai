<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'no_hp' => '089618106064',
        	'name' => 'admin',
        	'tgl_lahir' => '1994-04-24',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('1234'),
        	'role' => 'admin'
        	]);
        App\User::create([
        	'no_hp' => '089618107878',
        	'name' => 'aji',
        	'tgl_lahir' => '1993-03-03',
        	'email' => 'aji@gmail.com',
        	'password' => bcrypt('4321'),
        	'role' => 'karyawan'
        	]);
    
    }
}
