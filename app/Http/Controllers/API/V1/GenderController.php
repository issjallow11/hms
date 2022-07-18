<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $gender = Gender::get();

      return $this->sendResponse($gender, 'success');
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

        $gender = new Gender();
        $gender->name = $request->name;
        $gender->save();

        return $this->sendResponse($gender, 'success');

      } catch (\Exception $e) {
        return $this->sendError('error');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function show(Gender $gender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gender $gender)
    {
      try {
        $request->validate([
          'name' => 'required'
        ]);

        $gender->name = $request->name;
        $gender->save();

        return $this->sendResponse($gender, 'success');

      } catch (\Exception $e) {
        return $this->sendError('error');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gender  $gender
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gender $gender)
    {
        try {
      
          $gender->delete();

          return $this->sendResponse($gender, 'success');

        } catch (\Exception $e) {
          return $this->sendError('error');
        }
    }
}
