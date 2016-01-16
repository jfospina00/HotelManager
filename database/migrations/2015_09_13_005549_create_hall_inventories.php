<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallInventories extends Migration
{
    public function up()
    {
        Schema::create('hall_inventories', function(Blueprint $table){
            $table->increments('id');

            $table->integer('general_inventory_id')->unsigned();
            $table->foreign('general_inventory_id')->references('id')->on('general_inventories');
        });
    }

    public function down()
    {
        Schema::drop('hall_inventories');
    }
}
