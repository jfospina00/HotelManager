<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSales extends Migration
{

    public function up()
    {
        Schema::create('sales', function(Blueprint $table){
            $table->increments('id');
            $table->integer('number_room');
            $table->integer('iva');
            $table->integer('subtotal');
            $table->integer('total');

            $table->integer('mguest_id')->unsigned();
            $table->foreign('mguest_id')->references('id')->on('room_inventories');

            $table->integer('cotization_id')->unsigned();
            $table->foreign('cotization_id')->references('id')->on('cotizations');
        });
    }

    public function down()
    {
        Schema::drop('sales');
    }
}
