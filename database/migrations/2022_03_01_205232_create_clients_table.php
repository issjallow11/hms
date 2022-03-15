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
            $table->string('clinic_no');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->integer('telephone_1');
            $table->integer('telephone_2')->nullable();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('nationality');            
            $table->date('date_of_birth')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender');
            $table->string('marriage');
            $table->string('marital_status')->nullable();
            $table->string('sexual_orientation');
            $table->longText('medical_history')->nullable();
            $table->longText('medical_history_details')->nullable();
            $table->longText('medication')->nullable();
            $table->longText('medication_details')->nullable();
            $table->string('allergies')->nullable();
            $table->longText('allergies_details')->nullable();            
            $table->string('ethnicity');
            $table->string('preferred_form_of_contact');
            $table->string('contact_type');
            $table->string('educated');
            $table->longText('education_type')->nullable();
            $table->string('education_level')->nullable();
            $table->string('occupation');
            $table->string('occupation_type')->nullable();
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
