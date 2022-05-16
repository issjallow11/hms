<?php

namespace App\Http\Controllers\API\V1;

use App\Models\GeneralOPD;
use Illuminate\Http\Request;

class GeneralOPDController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return 'hello' ;
      try {
        //code...
        $generalOPD = new GeneralOPD();
        $generalOPD->visitor_id = $request->visitor_id;
        $generalOPD->allergies = $request->allergies;
        $generalOPD->bp = $request->bp;
        $generalOPD->temperature = $request->temperature;
        $generalOPD->weight = $request->weight;
        $generalOPD->bmi_calculator = $request->bmi_calculator;
        $generalOPD->bm_mmol = $request->bm_mmol;
        $generalOPD->bm_mmol_details = $request->bm_mmol_details;
        $generalOPD->hb_g = $request->hb_g;
        $generalOPD->hb_g_details = $request->hb_g_details;
        $generalOPD->hcg = $request->hcg;
        $generalOPD->hcg_details = $request->hcg_details;
        $generalOPD->rdt = $request->rdt;
        $generalOPD->rdt_details = $request->rdt_details;
        $generalOPD->urinalysis = $request->urinalysis;
        $generalOPD->urinalysis_details = $request->urinalysis_details;
        $generalOPD->diagnosis = $request->diagnosis;
        $generalOPD->treatment_given = $request->treatment_given;
        $generalOPD->sexual_health_screening = $request->sexual_health_screening;
        $generalOPD->counselling_provided = $request->counselling_provided;
        $generalOPD->referred = $request->referred;
        $generalOPD->question_asked_by_client = $request->question_asked_by_client;
        $generalOPD->information_leaflet = $request->information_leaflet;
        $generalOPD->information_advice_treatment_given = $request->information_advice_treatment_given;
        $generalOPD->follow_up = $request->follow_up;

        $generalOPD->save();
        
        return $this->sendResponse($generalOPD, 'success');

      } catch (\Exception $e) {
        //throw $th;
        return $e->getMessage();
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralOPD  $generalOPD
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralOPD $generalOPD)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralOPD  $generalOPD
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralOPD $generalOPD)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralOPD  $generalOPD
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralOPD $generalOPD)
    {
        //
    }
}
