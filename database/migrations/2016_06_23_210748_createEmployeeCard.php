<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('EmployeeCards', function (Blueprint $table) {
            
            $table->increments('id');
            $table->integer('created_by_user_id')->index();
            $table->string('id_card_number'); //Dowod osobisty
            $table->string('personal_identity_number');//Pesel lub co innego
            $table->string('other_personal_identity_number_name');//nazwa czegos innego niz pesel
            $table->string('name');
            $table->string('email');
            $table->string('contact_adress');
            $table->string('contact_number');
            $table->string('second_contact_number');
            $table->string('adress_country');
            $table->string('adress_city');
            $table->string('adress_street');
            $table->string('adress_home_number');
            $table->string('adress_local_number');
            $table->string('zip_code');
            $table->date('birth_date');
            $table->string('bank_account_number');
            $table->longText('description'); //or comment
            $table->longText('cv_url');
            $table->longText('motivation_url');
            $table->boolean('blocked');           
            $table->integer('added_by');
            $table->boolean('deleted');
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
        Schema::drop('EmployeeCards');
    }
}
