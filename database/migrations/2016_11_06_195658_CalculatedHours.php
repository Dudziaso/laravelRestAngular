<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CalculatedHours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('CalculatedHours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('calculatedHours');
            $table->date('workDay');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('Employee')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('CalculatedHours');

    }
}
