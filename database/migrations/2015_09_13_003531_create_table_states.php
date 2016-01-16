<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStates extends Migration
{
    public function up()
    {
        Schema::create('states', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_state');
            $table->string('type_state');
            $table->string('description_state');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('states');
    }
}
