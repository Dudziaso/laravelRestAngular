<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TimeRegisters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TimeRegisters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('registeredTime');
            $table->boolean('firstDayEntry')->default(true);
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
        Schema::drop('TimeRegisters');

    }
}
