<?php

use Illuminate\Database\Seeder;

class TypeRoomTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('type_rooms')->insert([
        	//1
        	'name_type_room' => 'Sencilla',
        	'description_type_room' => ' Posee una cama simple o individual, tiene el mobiliario básico de toda habitación, posee cuarto de baño',
        ]);
        DB::table('type_rooms')->insert([
        	//2
        	'name_type_room' => 'Doble',
        	'description_type_room' => 'Posee dos camas individuales, tiene el mobiliario básico de toda habitación, posee cuarto de baño.',
        ]);
        DB::table('type_rooms')->insert([
        	//3
        	'name_type_room' => 'Matrimonial',
        	'description_type_room' => 'Posee 1 cama doble, tiene el mobiliario básico de toda habitación, posee cuarto de baño.',
        ]);
        DB::table('type_rooms')->insert([
        	//4
        	'name_type_room' => 'Suite Junior',
        	'description_type_room' => 'Este tipo de suite consta de un dormitorio con baño y salón de estar o recibo.  El dormitorio posee el mobiliario básico de toda habitación, con dos camas individuales o una matrimonial.',
        ]);
        DB::table('type_rooms')->insert([
        	//5
        	'name_type_room' => 'Suite Doble',
        	'description_type_room' => 'Este tipo de suite consta de dos dormitorios, uno con cama matrimonial y otro  con dos camas individuales, cada dormitorio con su baño. Además tiene recibo o salón de estar con mobiliario básico, igual a las demás habitaciones.',
        ]);
         DB::table('type_rooms')->insert([
        	//6
        	'name_type_room' => 'Suite Presidencial',
        	'description_type_room' => 'Este tipo de suite consta de varios dormitorios con sus baños, salón recibo y algunas veces posee comedor y cocina, dependiendo de la categoría del hotel. El mobiliario es muy lujoso tiene accesorios de valor y objetos de arte como alfombras, lámparas, floreros, cuadros.',
        ]);
         DB::table('type_rooms')->insert([
        	//7
        	'name_type_room' => 'Tipo Estudio',
        	'description_type_room' => ' Posee una cama simple o individual, tiene el mobiliario básico de toda habitación, posee cuarto de baño, 1 sofá',
        ]);
         DB::table('type_rooms')->insert([
        	//8
        	'name_type_room' => 'Corner Suite',
        	'description_type_room' => 'Se caracteriza por estar ubicada en las esquinas de la edificación y por tanto presentan mayor espacio.',
        ]);
          DB::table('type_rooms')->insert([
        	//9
        	'name_type_room' => 'Habitaciones Comunicantes',
        	'description_type_room' => 'Poseen comunicación a través de puertas internas.',
        ]);
            DB::table('type_rooms')->insert([
        	//10
        	'name_type_room' => 'Habitaciones Triples',
        	'description_type_room' => 'Poseen dos camas, más una adicional.',
        ]);
    }
    
}
