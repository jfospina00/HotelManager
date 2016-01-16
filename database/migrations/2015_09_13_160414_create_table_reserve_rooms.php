<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReserveRooms extends Migration
{

    public function up()
    {
        Schema::create('reserve_rooms', function(Blueprint $table){
            $table->increments('id');
            $table->integer('adult_occupant');
            $table->integer('child_occupant');
            $table->string('stay');
            $table->date('start_at');
            $table->date('exit_at');
            $table->double('price');
            //Foreign
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');

            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('type_room_id')->unsigned();
            $table->foreign('type_room_id')->references('id')->on('type_rooms');

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    public function down()
    {
        Schema::drop('reserve_rooms');
    }
}
