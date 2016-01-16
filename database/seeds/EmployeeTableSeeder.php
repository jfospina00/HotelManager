<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('employees')->insert([
        	'id' => 1054897843,
        	'first_name' => 'Johny Farid',
        	'last_name' => 'Ospina Betancur',
        	'telephone' => 8801632,
            'mobile' => 3215353528,
            'genere' => 'Masculino',
        	'email' => 'jfospina00@misena.edu.co',
        	'adreess' => 'Calle 25A # 31B 12',
        	'city' => 'Manizales',
        	'user_id' => 1,
        	'position_id' => 1,
        	'state_id' => 2,
        ]);
        DB::table('employees')->insert([
        	'id' => 750000002,
        	'first_name' => 'Jeremias',
        	'last_name' => 'Sprinfield',
        	'telephone' => 8847696,
        	'mobile' => 3117456789,
            'genere' => 'Masculino',
            'email' => 'io@jeremias.me',
        	'adreess' => 'A la vuelta de la siempre viva',
        	'city' => 'Manizales',
        	'user_id' => 2,
        	'position_id' => 2,
        	'state_id' => 2,
        ]);
        DB::table('employees')->insert([
        	'id' => 750000003,
        	'first_name' => 'Homero',
        	'last_name' => 'Simsomp',
        	'telephone' => 8840001,
        	'mobile' => 3178200017,
            'genere' => 'Masculino',
            'email' => 'io@homero.me',
        	'adreess' => 'Calle siempre viva',
        	'city' => 'Manizales',
        	'user_id' => 3,
        	'position_id' => 3,
        	'state_id' => 2,
        ]);
        DB::table('employees')->insert([
        	'id' => 750000004,
        	'first_name' => 'Bart',
        	'last_name' => 'Simsomp',
        	'telephone' => 8840001,
        	'mobile' => 3178200018,
            'genere' => 'Masculino',
            'email' => 'io@bart.me',
        	'adreess' => 'Calle siempre viva',
        	'city' => 'Manizales',
        	'user_id' => 4,
        	'position_id' => 4,
        	'state_id' => 2,
        ]);
        DB::table('employees')->insert([
        	'id' => 750000005,
        	'first_name' => 'Lisa',
        	'last_name' => 'Simsomp',
        	'telephone' => 8840001,
        	'mobile' => 3147456890,
            'genere' => 'Femenino',
            'email' => 'io@lisa.me',
        	'adreess' => 'Calle siempre viva',
        	'city' => 'Manizales',
        	'user_id' => 5,
        	'position_id' => 4,
        	'state_id' => 2,
        ]);
    }
}
