<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->integer('clinic_no');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('address');
            $table->string('date_of_birth');
            $table->integer('age');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('nationality');
            $table->string('sexual_orientation');
            $table->string('medical_history');
            $table->string('medications');
            $table->string('allergies');
            $table->string('ethnicity');
            $table->integer('telephone_1');
            $table->integer('telephone_2');
            $table->string('email');
            $table->string('preferred_form_of_contact');
            $table->string('education')->nullable();
            $table->string('education_level');
            $table->string('occupation');
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
        Schema::dropIfExists('clients');
    }
}
