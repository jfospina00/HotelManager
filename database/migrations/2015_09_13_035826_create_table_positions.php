<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePositions extends Migration
{
    public function up()
    {
        Schema::create('positions', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_position');
            $table->string('security_level');
            $table->string('description_position');
        });
    }

    public function down()
    {
        Schema::drop('positions');
    }
}
