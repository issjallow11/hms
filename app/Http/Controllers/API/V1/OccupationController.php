<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Occupation;
use Illuminate\Http\Request;

class OccupationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $occupations = Occupation::get();

      return $this->sendResponse($occupations, 'success');
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
        'name' => 'required',
      ]);

      try {
        $occupation = new Occupation();
        $occupation->name = $request->name;
        $occupation->save();
        
        return $this->sendResponse($occupation, 'success');

      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function show(Occupation $occupation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Occupation $occupation)
    {
      try {
        $request->validate([
          'name' => 'required',
        ]);
  
        $occupation->name = $request->name;
        $occupation->save();
  
        return $this->sendResponse($occupation, 'Tribe Successfully Updated');

      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Occupation $occupation)
    {
      try {
        //code...
        $occupation->delete();
  
        return $this->sendResponse($occupation,'success');
      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }
    }
}
