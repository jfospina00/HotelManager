<?php

use Illuminate\Database\Seeder;

class PositionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('positions')->insert([
        	//1
        	'name_position' => 'Adminstrador',
        	'security_level' => 'nivel 1',
        	'description_position' => 'Control total del sistema',
        ]);
        DB::table('positions')->insert([
        	//2
        	'name_position' => 'Gerente',
        	'security_level' => 'nivel 2',
        	'description_position' => 'Solo consultas de todo los registros del hotel',
        ]);
        DB::table('positions')->insert([
        	//3
        	'name_position' => 'Audistorista',
        	'security_level' => 'nivel 3',
        	'description_position' => 'Resgistra huespedes,registra eventos, realiza auditorias, realiza trsuntos',
        ]);
        DB::table('positions')->insert([
        	//4
        	'name_position' => 'Recepcionista',
        	'security_level' => 'nivel 4',
        	'description_position' => 'Resgistra huespedes, registra eventos',
        ]);

    }
}
