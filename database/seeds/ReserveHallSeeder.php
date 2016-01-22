<?php

use Illuminate\Database\Seeder;

class ReserveHallSeeder extends Seeder
{

    public function run()
    {
         DB::table('reserve_halls')->insert([
            //1
            'cotization_id' => 1
        ]);
    }
}
