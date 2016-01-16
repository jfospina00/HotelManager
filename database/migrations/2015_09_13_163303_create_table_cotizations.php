<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCotizations extends Migration
{
    public function up()
    {
        Schema::create('cotizations', function(Blueprint $table){
            $table->increments('id');
            //================  LLENABLE POR EL CLIENTE     ======================
            $table->integer('turnout');   //asistentes
            $table->integer('adult');
            $table->integer('child');
            $table->string('child_menu'); //menu infantil
            $table->text('assembly_hall');//montaje de salon
            $table->date('create_at');    //fecha del evento
            $table->time('time');         //hora del evento
            $table->string('intake');     //entrada
            $table->string('main_course');//fuerte
            $table->string('dessert');    //postre
            $table->string('beverage');   //bebdia
            //================  LLENABLE POR EL CLIENTE     ======================
            $table->string('child_menu_price');        //menu infantil
            $table->integer('intake_price');     //precio entrada
            $table->integer('main_course_price');//precio fuerte
            $table->integer('dessert_price');    //precio postre
            $table->integer('beverage_price');   //precio bebdia
            $table->integer('total_price');      //precio total

            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');

            $table->integer('type_event_id')->unsigned();
            $table->foreign('type_event_id')->references('id')->on('type_events');

            $table->integer('hall_id')->unsigned();
            $table->foreign('hall_id')->references('id')->on('halls');

            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employees');

        });
    }

    public function down()
    {
        Schema::drop('cotizations');
    }
}
