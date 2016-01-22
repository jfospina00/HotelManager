<?php

use Illuminate\Database\Seeder;

class CotizationSeeder extends Seeder
{

    public function run()
    {
        DB::table('cotizations')->insert([
        	//1
        	'turnout' => 250,
        	'adult' => 250,
        	'child' => 0,
        	'child_menu' => 'No',
        	'assembly_hall' => 'Nada en espcial',
        	'intake' => 'Consome',
        	'main_course' => 'Frijoles Rancheros',
        	'dessert' => 'Flan de arequipe',
        	'beverage' => 'Jugo de Mora y Mango',
        	'child_menu_price' => 0,
        	'intake_price' => 10000,
        	'main_course_price' => 15000,
        	'dessert_price' => 6000,
        	'beverage_price' => 6000,
        	'total_price' => 9250000,
        	'client_id' => 750000006,
        	'type_event_id' => 3,
        	'hall_id' => 2,
        	'state_id' => 9,
        	'employee_id' => 750000004,
        ]);
    }
}
