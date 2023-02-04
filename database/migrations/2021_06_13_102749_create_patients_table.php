<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('L_name');
            $table->integer('phone');
            $table->date('date');
            $table->integer('age');
            $table->string('sex');
            $table->integer('dr_id')->unsigned();
            $table->foreign('dr_id')->references('id')->on('employees');
            $table->integer('ser_id')->unsigned();
            $table->foreign('ser_id')->references('id')->on('services');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
