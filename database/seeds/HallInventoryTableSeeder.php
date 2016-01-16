<?php

use Illuminate\Database\Seeder;

class HallInventoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('hall_inventories')->insert([
        	//1
        	'general_inventory_id' =>5,
        	'general_inventory_id' =>6,
        ]);
        DB::table('hall_inventories')->insert([
        	//2
        	'general_inventory_id' =>5,
        	'general_inventory_id' =>6,
        ]);
    }
}
