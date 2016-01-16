<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRooms extends Migration
{
    public function up()
    {
        Schema::create('rooms', function(Blueprint $table){
            $table->increments('id');
            $table->integer('number_room')->unique();
            $table->text('description_room');
            //Foreing Keys
            $table->integer('type_room_id')->unsigned();
            $table->foreign('type_room_id')->references('id')->on('type_rooms');

            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('room_inventory_id')->unsigned();
            $table->foreign('room_inventory_id')->references('id')->on('room_inventories');
        });
    }

    public function down()
    {
        Schema::drop('rooms');
    }
}
