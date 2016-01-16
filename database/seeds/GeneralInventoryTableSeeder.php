<?php

use Illuminate\Database\Seeder;

class GeneralInventoryTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('general_inventories')->insert([
        	//1
        	'name_product' => 'Televisor SamSung,21 pulgas',
        	'model' => '49LF5400',
        	'quantity' => 20,
        ]);
        DB::table('general_inventories')->insert([
        	//2
        	'name_product' => 'Base Cama, 1.80cm x 1.50cm',
        	'model' => '',
        	'quantity' => 10,
        ]);
         DB::table('general_inventories')->insert([
        	//3
        	'name_product' => 'Cobija 2.02cm x 1.90cm ',
        	'model' => '',
        	'quantity' => 10,
        ]);
         DB::table('general_inventories')->insert([
        	//4
        	'name_product' => 'Colchones',
        	'model' => 'Coomodisimos, ortopedicos',
        	'quantity' => 35,
        ]);
         DB::table('general_inventories')->insert([
            //5
            'name_product' => 'Mesa',
            'model' => '4mts, 2mts',
            'quantity' => 6,
        ]);
         DB::table('general_inventories')->insert([
            //6
            'name_product' => 'Silla',
            'model' => '',
            'quantity' => 40,
        ]);
    }
}
