<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{

    public function run()
    {	//Estados del empleados
    	DB::table('states')->insert([
    		//1
        	'name_state' => 'Contratado',
        	'type_state' => 'Empleado',
        	'description_state' =>'Empleado trabaja actualmente',
        ]);
        DB::table('states')->insert([
        	//2
        	'name_state' => 'Despedido',
        	'type_state' => 'Empleado',
        	'description_state' =>'Empleado desdepedido del hotel',
        ]);
        //Esatdos del usuarios
        DB::table('states')->insert([
        	//3
        	'name_state' => 'Activo',
        	'type_state' => 'Usuario',
        	'description_state' =>'Permite la accesiblidad al sistema',
        ]);

        DB::table('states')->insert([
        	//4
        	'name_state' => 'Inactivo',
        	'type_state' => 'Usuario',
        	'description_state' =>'Permite la inaccesiblidad al sistema',
        ]);
        //Estados de habitaciones y salones
        DB::table('states')->insert([
        	//5
        	'name_state' => 'Reservado',
        	'type_state' => 'Habitacion y Salón',
        	'description_state' =>'Estado para reserva de una habitación o un salón del hotel',
        ]);
        DB::table('states')->insert([
        	//6
        	'name_state' => 'Libre',
        	'type_state' => 'Habitacion y Salón',
        	'description_state' =>'Estado para una habitación o un salón del hotel haciendo que este sea libre',
        ]);
        //Estados de eventos
        DB::table('states')->insert([
        	//7
        	'name_state' => 'Progreso',
        	'type_state' => 'Evento',
        	'description_state' =>'Estado que indica que el evento no esta culminado',
        ]);
        DB::table('states')->insert([
        	//8
        	'name_state' => 'Finalizado',
        	'type_state' => 'Evento',
        	'description_state' =>'Estado que indica que el evento esta culminado',
        ]);
        //Estados de eventos
        DB::table('states')->insert([
            //9
            'name_state' => 'Limpio',
            'type_state' => 'Cliente',
            'description_state' =>'Estado que indica que el cliente que no debe nada en el hotel',
        ]);
    }
}
