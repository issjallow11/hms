<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('visitors', function (Blueprint $table) {
      $table->id();
      $table->string('client_no');
      $table->foreign('client_no')->references('client_no')->on('clients')->onDelete('cascade');
      $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
      $table->longText('reason_for_visiting');
      $table->string('status');
      $table->longText('remarks')->nullable();
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
    Schema::dropIfExists('visitors');
  }
}
