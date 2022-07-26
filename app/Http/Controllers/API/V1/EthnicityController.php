<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Ethnicity;
use Illuminate\Http\Request;

class EthnicityController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tribes = Ethnicity::get();
      
      return $this->sendResponse($tribes, 'success');
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
  
        $tribe = new Ethnicity();
        $tribe->name = $request->name;
        $tribe->save();
        
        return $this->sendResponse($tribe, 'Tribe Successfully Added');

      } catch (\Exception $e) {
        return $this->sendError($e->getMessage());
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function show(Ethnicity $ethnicity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ethnicity $ethnicity)
    {
      try {
        $request->validate([
          'name' => 'required',
        ]);
  
        $ethnicity->name = $request->name;
        $ethnicity->save();
  
        return $this->sendResponse($ethnicity, 'Tribe Successfully Updated');

      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ethnicity  $ethnicity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ethnicity $ethnicity)
    {
      try {
        //code...
        $ethnicity->delete();
  
        return $this->sendResponse($ethnicity,'success');
      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }
    }
}
