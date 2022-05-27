<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourEquiryFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_equiry_forms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();           

            $table->integer('phone')->unsigned();
            $table->string('country')->nullable();


            $table->string('tour_type')->nullable();
            $table->string('accommodation')->nullable();
            $table->integer('adults')->nullable();           

            $table->integer('teens')->nullable();
            $table->integer('children')->nullable();
           $table->date('travel_date')->date();
             $table->string('additional_information')->nullable();
              $table->string('hear_about_us')->nullable();
              
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
        Schema::dropIfExists('tour_equiry_forms');
    }
}
