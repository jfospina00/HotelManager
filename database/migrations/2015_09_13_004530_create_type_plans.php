<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypePlans extends Migration
{
    public function up()
    {
        Schema::create('type_plans', function(Blueprint $table){
            $table->increments('id');
            $table->string('name_type_plan');
            $table->integer('price_plan');
            $table->string('description_type_plan');
        });
    }

    public function down()
    {
        Schema::drop('type_plans');
    }
}
