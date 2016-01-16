<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReserveHalls extends Migration
{

    public function up()
    {
        Schema::create('reserve_halls', function(Blueprint $table){
            $table->increments('id');
            
            $table->integer('cotization_id')->unsigned();
            $table->foreign('cotization_id')->references('id')->on('cotizations');
        });
    }

    public function down()
    {
        Schema::drop('reserve_halls');
    }
}
