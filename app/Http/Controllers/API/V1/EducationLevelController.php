<?php

namespace App\Http\Controllers\API\V1;

use App\Models\EducationLevel;
use Illuminate\Http\Request;

class EducationLevelController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $educationLevel = EducationLevel::get();

      return $this->sendResponse($educationLevel, 'success');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {
        $request->validate([
          'name' => 'required'
        ]);
  
        $educationLevel = new EducationLevel();
        $educationLevel->name = $request->name;
        $educationLevel->save();
        
        return $this->sendResponse($educationLevel, 'Tribe Successfully Added');

      } catch (\Exception $e) {
        return $this->sendError($e->getMessage());
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function show(EducationLevel $educationLevel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EducationLevel $educationLevel)
    {
      try {
        $request->validate([
          'name' => 'required',
        ]);
  
        $educationLevel->name = $request->name;
        $educationLevel->save();
  
        return $this->sendResponse($educationLevel, 'Tribe Successfully Updated');

      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationLevel  $educationLevel
     * @return \Illuminate\Http\Response
     */
    public function destroy(EducationLevel $educationLevel)
    {
      try {
        //code...
        $educationLevel->delete();
  
        return $this->sendResponse($educationLevel,'success');
      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }
    }
}
