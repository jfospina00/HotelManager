<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableClients extends Migration
{

    public function up()
    {
        Schema::create('clients', function(Blueprint $table){
            $table->integer('id')->unsigned();
            $table->primary('id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('genere');
            $table->string('email');
            $table->double('telephone');
            $table->double('mobile');
            $table->string('adreess');
            $table->string('city');
            //Foreign key
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');
        });
    }

    public function down()
    {
        Schema::drop('clients');
    }
}
