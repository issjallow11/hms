<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalHistoriesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('medical_histories', function (Blueprint $table) {
      $table->id();
      $table->foreignId('medical_condition_id')->constrained();
      // $table->foreign('clinic_no')->references('clinic_no')->on('clients')->onDelete('cascade');
      // $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
      $table->longText('medical_history')->nullable();
      $table->longText('medical_history_details')->nullable();
      $table->longText('medication')->nullable();
      $table->longText('medication_details')->nullable();
      $table->string('allergies')->nullable();
      $table->longText('allergies_details')->nullable();
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
    Schema::dropIfExists('medical_histories');
  }
}
