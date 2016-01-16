<?php

use Illuminate\Database\Seeder;

class HallTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('halls')->insert([
        	//1
        	'name_hall' => 'Salon Vitrales',
        	'capacity' => 50,
        	'description_hall' => 'Salon Grande, lleno de hermoso vitrales',
        	'state_id' => 6,
        	'hall_inventory_id' => 1,
        ]);
         DB::table('halls')->insert([
        	//2
        	'name_hall' => 'Salon Reuniones',
        	'capacity' => 15,
        	'description_hall' => 'Salon pequeño',
        	'state_id' => 6,
        	'hall_inventory_id' => 2,
        ]);
    }
}
