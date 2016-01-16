<?php

use Illuminate\Database\Seeder;

class RoomInventoryTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('room_inventories')->insert([
        	//1
        	'general_inventory_id' =>1,
        	'general_inventory_id' =>2,
        	'general_inventory_id' =>3,
        	'general_inventory_id' =>4,
        ]);
         DB::table('room_inventories')->insert([
        	//2
        	'general_inventory_id' =>1,
        	'general_inventory_id' =>4,
        ]);
          DB::table('room_inventories')->insert([
        	//3
        	'general_inventory_id' =>4,
        	'general_inventory_id' =>3,
        	'general_inventory_id' =>2,
        	'general_inventory_id' =>1,
        ]);
    }
}
