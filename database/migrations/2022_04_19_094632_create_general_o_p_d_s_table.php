<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralOPDSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_o_p_d_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('visitor_id')->nullable()->constrained()->onDelete('cascade');
            // $table->string('complaint');
            // $table->string('current_medication');
            // $table->string('current_medication_details');
            $table->string('allergies');
            $table->integer('bp');
            $table->integer('temperature');
            $table->integer('weight');
            $table->integer('bmi_calculator');
            $table->integer('bm_mmol');
            $table->string('bm_mmol_details');
            $table->integer('hb_g');
            $table->string('hb_g_details');
            $table->string('hcg');
            $table->string('hcg_details');
            $table->string('rdt');
            $table->string('rdt_details');
            $table->string('urinalysis');
            $table->string('urinalysis_details');
            $table->string('diagnosis');
            $table->string('treatment_given');
            $table->string('sexual_health_screening');
            $table->string('sexual_health_screening_reason')->nullable();
            $table->string('counselling_provided');
            $table->string('referred');
            $table->string('question_asked_by_client')->nullable();
            $table->string('information_leaflet')->nullable();
            $table->string('information_advice_treatment_given')->nullable();
            $table->string('follow_up')->nullable();
            $table->dateTime('appointment_date')->nullable();
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
        Schema::dropIfExists('general_o_p_d_s');
    }
}
