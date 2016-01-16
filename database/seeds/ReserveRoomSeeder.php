<?php

use Illuminate\Database\Seeder;

class ReserveRoomSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('reserve_rooms')->insert([
        	//1
        	'adult_occupant' => 1,
        	'child_occupant' => 2,
        	'stay'           => 2,
        	'start_at'       => '2015/08/15',
        	'exit_at'        => '2015/08/17',
        	'client_id'      => 750000006,
        	'state_id'       => 5,
        	'type_room_id'   => 2,
            'room_id'        => 1,
        ]);
        DB::table('reserve_rooms')->insert([
            //1
            'adult_occupant' => 1,
            'child_occupant' => 0,
            'stay'           => 15,
            'start_at'       => '2015/10/15',
            'exit_at'        => '2015/10/30',
            'client_id'      => 750000006,
            'state_id'       => 5,
            'type_room_id'   => 5,
            'room_id'        => 4,
        ]);
    }
}
