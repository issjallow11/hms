<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Referral;
use Illuminate\Http\Request;

class ReferralController extends BaseController
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
      $request->validate([
        'referred_to' => 'required',
        'reason_for_referral' => 'required',
        'date' => 'required',
      ]);

      try {
        //code...
        $referral = new Referral();
        $referral->visitor_id = $request->visitorId;
        $referral->referred_to = $request->referred_to;
        $referral->reason_for_referral = $request->reason_for_referral;
        $referral->date = $request->date;
        $referral->questions = $request->questions;
        $referral->referral_form_signed = $request->referral_form_signed;
        $referral->relevant_details = $request->relevant_details;
        
        $referral->save();

        return $this->sendResponse($referral, 'success');

      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError($e->getMessage());
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function show(Referral $referral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Referral $referral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Referral  $referral
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referral $referral)
    {
        //
    }
}
