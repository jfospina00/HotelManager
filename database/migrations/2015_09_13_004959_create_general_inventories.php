<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralInventories extends Migration
{

    public function up()
    {
        Schema::create('general_inventories', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_product');
            $table->string('model');
            $table->integer('quantity');
            $table->date('created_at');
        });
    }

    public function down()
    {
        Schema::drop('general_inventories');
    }
}
