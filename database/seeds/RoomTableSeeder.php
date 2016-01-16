<?php

use Illuminate\Database\Seeder;

class RoomTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('rooms')->insert([
        	//1
        	'number_room' =>201,
        	'description_room' =>'Habitacion ubicada en el segundo piso',
        	'type_room_id' => 1,
        	'state_id' => 6,
        	'room_inventory_id' =>1,
        ]);
        DB::table('rooms')->insert([
        	//2
        	'number_room' =>202,
        	'description_room' =>'Habitacion ubicada en el segundo piso',
        	'type_room_id' => 2,
        	'state_id' => 6,
        	'room_inventory_id' =>1,
        ]);
        DB::table('rooms')->insert([
        	//3
        	'number_room' =>203,
        	'description_room' =>'Habitacion ubicada en el segundo piso',
        	'type_room_id' => 2,
        	'state_id' => 6,
        	'room_inventory_id' =>1,
        ]);
        DB::table('rooms')->insert([
        	//4
        	'number_room' =>204,
        	'description_room' =>'Habitacion ubicada en el segundo piso',
        	'type_room_id' => 3,
        	'state_id' => 5,
        	'room_inventory_id' =>3,
        ]);
    }
}
