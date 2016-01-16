<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTypeRooms extends Migration
{
    public function up()
    {
        Schema::create('type_rooms', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_type_room');
            $table->string('description_type_room');
        });
    }

    public function down()
    {
        Schema::drop('type_rooms');
    }
}
