<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTypeEvents extends Migration
{
    public function up()
    {
        Schema::create('type_events', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_type_event');
            $table->string('description_type_event');
        });
    }

    public function down()
    {
        Schema::drop('type_events');
    }
}
