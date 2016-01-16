<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMguests extends Migration
{

    public function up()
    {
         Schema::create('mguests', function(Blueprint $table){
            $table->integer('id')->unsigned();
            $table->primary('id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('genere');
            $table->double('telephone');
            $table->double('mobile');
            $table->string('adreess');
            $table->string('email');
            $table->string('city_h');
            $table->string('country_h');
            $table->string('ocupation');
            $table->string('trasportation');
            $table->string('reservation');
            $table->string('purpose_trip');
            $table->string('coming_from');
            $table->string('destination');
            $table->string('stay');
            //FOR HOTEL USE ONLY
            $table->string('name_establishment');
            $table->string('city');
            $table->string('departament');
            $table->string('car_plate');
            $table->integer('adult_occupant');
            $table->integer('child_occupant');
            $table->dateTime('start_at');
            $table->dateTime('exit_at');
            $table->string('country_permanece');
            $table->string('way_pay');
            //Foreign key
            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('type_plans');

            $table->integer('room_id')->unsigned();
            $table->foreign('room_id')->references('id')->on('rooms');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::drop('mguests');
    }
}
