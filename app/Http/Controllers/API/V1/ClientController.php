<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ClientController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get();
        
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
          'date_of_birth' => 'required',
          'age' => 'required',
          'gender' => 'required',
          'marital_status' => 'required',
        ]);

        try {
          //code...
          $client = new Client;
          $client->clinic_no = $request->clinic_no;
          $client->first_name = $request->first_name;
          $client->middle_name = $request->middle_name;
          $client->last_name = $request->last_name;
          $client->address = $request->address;
          $client->date_of_birth = $request->date_of_birth;
          $client->age = $request->age;
          $client->gender = $request->gender;
          $client->marital_status = $request->marital_status;
          $client->nationality = $request->nationality;
          $client->sexual_orientation = $request->sexual_orientation;
          $client->medical_history = $request->medical_history;
          $client->medications = $request->medications;
          $client->allergies = $request->allergies;
          $client->ethnicity = $request->ethnicity;
          $client->telephone_1 = $request->telephone_1;
          $client->telephone_2 = $request->telephone_2;
          $client->email = $request->email;
          $client->preferred_form_of_contact = $request->preferred_form_of_contact;
          $client->education = $request->education;
          $client->education_level = $request->education_level;
          $client->occupation = $request->occupation;
  
          $client->save();

        } catch (\Exception $e) {
          //throw $th;
          // return $this->sendError('error');
          return $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        
    }
}
