<?php

namespace App\Http\Controllers\API\V1;

use App\Models\MedicalCondition;
use Illuminate\Http\Request;

class MedicalConditionController extends BaseController
{
  protected $medicalCondition;

  public function __construct(MedicalCondition $medicalCondition)
  {
    $this->medicalCondition = $medicalCondition;
  }
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $medicalCondition = MedicalCondition::get();

    return $this->sendResponse($medicalCondition, 'success');
  }

  public function list()
  {
    $medicalCondition = $this->medicalCondition->get(['name', 'id']);

    return $this->sendResponse($medicalCondition, 'success');
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
      'name' => 'required|String'
    ]);

    $medicalCondition = new MedicalCondition();
    $medicalCondition->name = $request->name;
    $medicalCondition->save();

    return $this->sendResponse($medicalCondition, 'success');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\MedicalCondition  $medicalCondition
   * @return \Illuminate\Http\Response
   */
  public function show(MedicalCondition $medicalCondition)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\MedicalCondition  $medicalCondition
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, MedicalCondition $medicalCondition)
  {
    $request->validate([
      'name' => 'required|String'
    ]);

    $medicalCondition->name = $request->name;
    $medicalCondition->save();

    return $this->sendResponse($medicalCondition, 'updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\MedicalCondition  $medicalCondition
   * @return \Illuminate\Http\Response
   */
  public function destroy(MedicalCondition $medicalCondition)
  {
    if ($medicalCondition) {
      $medicalCondition->delete();
    }

    return $this->sendResponse($medicalCondition, 'success');
  }
}
