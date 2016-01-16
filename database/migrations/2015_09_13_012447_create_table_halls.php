<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHalls extends Migration
{
    public function up()
    {
        Schema::create('halls', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_hall');
            $table->integer('capacity');
            $table->text('description_hall');
            //Foreing Keys
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('hall_inventory_id')->unsigned();
            $table->foreign('hall_inventory_id')->references('id')->on('hall_inventories');
        });
    }

    public function down()
    {
        Schema::drop('halls');
    }
}
