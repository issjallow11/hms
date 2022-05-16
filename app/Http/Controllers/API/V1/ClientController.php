<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\MedicalHistory;
use App\Models\Visitor;

class ClientController extends BaseController
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api');
    // }

    /**
     * Display a listing of the Visitors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::with('visitor','medicalHistory')->get();
        
        return $this->sendResponse($clients, 'clients list');
          
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
          'clinic_no' => 'required',
          'first_name' => 'required',
          'last_name' => 'required',
          'address' => 'required',
          'email' => 'required',
          'gender' => 'required',
          'marriage' => 'required',
          'sexual_orientation' => 'required',
          'ethnicity' => 'required',
          'telephone_1' => 'required',
          'preferred_form_of_contact' => 'required',
          'occupation' => 'required',
        ]);

        try {
          //code...
          DB::beginTransaction();
          $client = new Client;
          $client->clinic_no = $request->clinic_no;
          $client->first_name = $request->first_name;
          $client->middle_name = $request->middle_name;
          $client->last_name = $request->last_name;
          $client->email = $request->email;
          $client->address = $request->address;
          $client->date_of_birth = $request->date_of_birth;
          $client->age = $request->age;
          $client->gender = $request->gender;
          $client->marriage = $request->marriage;
          $client->marital_status = $request->marital_status;
          $client->nationality = $request->nationality;
          $client->sexual_orientation = $request->sexual_orientation;
          $client->ethnicity = $request->ethnicity;
          $client->telephone_1 = $request->telephone_1;
          $client->telephone_2 = $request->telephone_2;
          $client->preferred_form_of_contact = $request->preferred_form_of_contact;
          $client->contact_type = $request->contact_type;
          $client->educated = $request->educated;
          $client->education_type = $request->education_type;
          $client->education_level = $request->education_level;
          $client->occupation = $request->occupation;
          $client->occupation_type = $request->occupation_type;
          $client->save();

          $medicalHistory = new MedicalHistory;
          $medicalHistory->client_id = $client->id;
          $medicalHistory->medical_history = $request->medical_history;
          $medicalHistory->medical_history_details = $request->medical_history_details;
          $medicalHistory->medication = $request->medication;
          $medicalHistory->medication_details = $request->medication_details;
          $medicalHistory->allergies = $request->allergies;
          $medicalHistory->allergies_details = $request->allergies_details;
          $medicalHistory->save();

          $visit = new Visitor();
          $visit->client_id = $client->id;
          $visit->reason_for_visiting = $request->reason_for_visiting;
          $visit->status = 'Arrived, waiting to be seen (A)';
          $visit->save();

          DB::commit();
          
          return $this->sendResponse($client, 'New Record Added');

        } catch (\Exception $e) {
          //throw $th;
          DB::rollback();

          return $this->sendError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client,)
    {
      try {
        //for viewing a single patient
        $patient = Client::with('visitor','medicalHistory')->findOrFail($client->id);

        return $this->sendResponse($patient, 'ismaila');

      } catch (\Exception $e) {
        
        return $this->sendError('error');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $pat = Client::findOrFail($id);
        $pat->first_name = $request->first_name;
        $pat->medical_history = $request->medical_history;
        
        $pat->save();

        return $this->sendResponse($pat, 'client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
      $client->delete();

      return $this->sendResponse($client, 'Patient has been Deleted');
      
    }
}
