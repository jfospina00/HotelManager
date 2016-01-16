<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
        	'email'=>'jfospina00@misena.edu.co',
        	'password'=>bcrypt('admin'),
        	'role_id'=>1,
        	'state_id'=>3,
        ]);
        DB::table('users')->insert([
        	'email'=>'io@jeremias.me',
        	'password'=>bcrypt('empleado'),
        	'role_id'=>1,
        	'state_id'=>3,
        ]);
        DB::table('users')->insert([
        	'email'=>'io@homero.me',
        	'password'=>bcrypt('empleado'),
        	'role_id'=>1,
        	'state_id'=>3,
        ]);
        DB::table('users')->insert([
        	'email'=>'io@bart.me',
        	'password'=>bcrypt('empleado'),
        	'role_id'=>1,
        	'state_id'=>3,
        ]);
        DB::table('users')->insert([
        	'email'=>'io@lisa.me',
        	'password'=>bcrypt('empleado'),
        	'role_id'=>1,
        	'state_id'=>3,
        ]);
        DB::table('users')->insert([
        	'email'=>'io@marge.me',
        	'password'=>bcrypt('cliente'),
        	'role_id'=>2,
        	'state_id'=>3,
        ]);
    }
}
