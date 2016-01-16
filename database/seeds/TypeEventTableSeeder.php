<?php

use Illuminate\Database\Seeder;

class TypeEventTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('type_events')->insert([
        	//1
        	'name_type_event' => 'Matrimonio',
        	'description_type_event' => 'Matrimonio',
        ]);
        DB::table('type_events')->insert([
        	//2
        	'name_type_event' => '15 años',
        	'description_type_event' => '15 años',
        ]);
        DB::table('type_events')->insert([
        	//3
        	'name_type_event' => 'Reunion',
        	'description_type_event' => 'Reunion',
        ]);
    }
}
