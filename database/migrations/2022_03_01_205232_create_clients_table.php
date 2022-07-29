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
      $table->string('client_no')->index()->unique();
      $table->string('first_name');
      $table->string('middle_name')->nullable();
      $table->string('last_name');
      $table->integer('telephone_1');
      $table->integer('telephone_2')->nullable();
      $table->string('email')->unique();
      $table->string('address');
      $table->string('nationality');
      $table->date('date_of_birth')->nullable();
      // $table->integer('age')->nullable();
      // $table->string('gender');
      // $table->bigIncrements('gender_id');
      // $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
      $table->foreignId('gender_id')->nullable()->constrained()->onDelete('cascade');
      $table->string('marriage');
      $table->string('marital_status')->nullable();
      // $table->string('sexual_orientation');            
      // $table->foreignId('sexual_orientation_id')->constrained()->onDelete('cascade');
      $table->foreignId('sexual_orientation_id')->nullable()->constrained()->onDelete('cascade');
      // $table->string('ethnicity');
      // $table->foreignId('ethnicity_id')->constrained()->onDelete('cascade');
      $table->foreignId('ethnicity_id')->nullable()->constrained()->onDelete('cascade');
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
