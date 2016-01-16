<?php

use Illuminate\Database\Seeder;

class TypePlanTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('type_plans')->insert([
        	//1
        	'name_type_plan' => 'Familar',
        	'price_plan' => 500000,
        	'description_type_plan' => 'Supera el numero de 4 huespedes',
        ]);
        DB::table('type_plans')->insert([
        	//2
        	'name_type_plan' => 'Vacaciones',
        	'price_plan' => 2000000,
        	'description_type_plan' => 'Plan para vacaciones, en grupos mayores de 6 personas',
        ]);
        DB::table('type_plans')->insert([
        	//3
        	'name_type_plan' => 'Fin de Año',
        	'price_plan' => 1500000,
        	'description_type_plan' => 'Plan de find de año, 4 personas -',
        ]);
    }
}
