<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('Cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('card_id')->nullable();
            $table->string('card_id2')->nullable();
            $table->bigInteger('card_id_big_int')->nullable();
            $table->boolean('activated')->default(true);
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
        Schema::drop('Cards');

    }
}
