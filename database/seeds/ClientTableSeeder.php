<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('clients')->insert([
        	'id' => 750000006,
        	'first_name' => 'JMarge',
        	'last_name' => 'Simsomp',
        	'telephone' => 8841111,
        	'mobile' => 3108763456,
            'genere' => 'Femenino',
            'email' => 'io@marge.me',
        	'adreess' => 'Calle siempre viva',
        	'city' => 'Manizales',
        	'user_id' => 6,
        	'state_id' => 9,
        ]);
    }
}
