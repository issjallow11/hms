<?php

namespace App\Http\Controllers\API\V1;

use App\Models\SexualOrientation;
use Illuminate\Http\Request;

class SexualOrientationController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sex = SexualOrientation::get();

      return $this->sendResponse($sex, 'Sexual Orientaion');
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
  
        $tribe = new SexualOrientation();
        $tribe->name = $request->name;
        $tribe->save();
        
        return $this->sendResponse($tribe, 'Sex Successfully Added');

      } catch (\Exception $e) {
        return $this->sendError($e->getMessage());
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SexualOrientation  $sexualOrientation
     * @return \Illuminate\Http\Response
     */
    public function show(SexualOrientation $sexualOrientation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SexualOrientation  $sexualOrientation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      try {
        $request->validate([
          'name' => 'required',
        ]);

        $sexualOrientation = SexualOrientation::findOrFail($id);
        $sexualOrientation->name = $request->name;
        
        $sexualOrientation->save();
        return $this->sendResponse($sexualOrientation,'success');

      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError($e->getMessage());
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SexualOrientation  $sexualOrientation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try {
        //code...
        $sexualOrientation = SexualOrientation::findOrFail($id);
        $sexualOrientation->delete();
  
        return $this->sendResponse($sexualOrientation, 'success');
      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }

    }
}
