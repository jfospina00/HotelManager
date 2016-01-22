<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $this->call(RoleTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(TypeRoomTableSeeder::class);
        $this->call(PositionTableSeeder::class);
        $this->call(TypePlanTableSeeder::class);
        $this->call(GeneralInventoryTableSeeder::class);
        $this->call(TypeEventTableSeeder::class);
        $this->call(RoomInventoryTableSeeder::class);
        $this->call(HallInventoryTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(HallTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(EmployeeTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(ReserveRoomSeeder::class);
        $this->call(CotizationSeeder::class);
        $this->call(ReserveHallSeeder::class);
        
        Model::reguard();
    }
}
