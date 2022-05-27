<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tour_name')->nullable();
            $table->integer('days')->unsigned();
            $table->integer('price')->unsigned();
            $table->string('currency')->nullable();
            $table->string('category')->nullable();
            $table->string('type')->nullable();
            $table->string('style')->nullable();
            $table->string('overview')->nullable();
            $table->string('tour_highlight')->nullable();
            $table->string('physical_rating')->nullable();
            $table->string('seo')->nullable();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('programs');
    }
}
