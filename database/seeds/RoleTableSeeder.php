<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
         DB::table('roles')->insert([
         	'id'          =>1,
            'name_role'   => 'Empleado',
            'description_role' => 'Rol para los empleado del hotel',
        ]);

         DB::table('roles')->insert([
         	'id'          =>2,
            'name_role'   => 'Cliente',
            'description_role' => 'Rol para los clientes del hotel',
        ]);
    }
}
