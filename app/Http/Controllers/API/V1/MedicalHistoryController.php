<?php


namespace App\Http\Controllers\API\V1;

use App\Http\Requests\Users\UserRequest;
use App\Models\MedicalHistory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class MedicalHistoryController extends BaseController
{
    protected $medicalHistory = '';

    public function __construct(MedicalHistory $medicalHistory)
    {
      $this->middleware('auth:api');
      $this->medicalHistory = $medicalHistory;
    }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MedicalHistory  $medicalHistory
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalHistory $medicalHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MedicalHistory  $medicalHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicalHistory $medicalHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalHistory  $medicalHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalHistory $medicalHistory)
    {
        //
    }
}
