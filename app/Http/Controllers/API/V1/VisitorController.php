<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class VisitorController extends BaseController
{
  protected $visitor = '';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Visitor $visitor)
    {
        $this->middleware('auth:api');
        $this->visitor = $visitor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $visits = Visitor::with('client','user')->orderBy('created_at', 'desc')->paginate(10);
        $visits = $this->visitor->where('user_id',auth()->user()->id)
                                ->latest()->with( 'client', 'user' )
                                ->paginate(10);

        return $this->sendResponse($visits, 'success');
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
        $request->validate([
          'clinic_no' => 'required',
          'user_id' => 'required',
          'reason_for_visiting' => 'required'
        ]);

        try {
          //code...
          $visit = new Visitor();
          $visit->clinic_no = $request->clinic_no;
          $visit->reason_for_visiting = $request->reason_for_visiting;
          $visit->status = $request->status;
          $visit->remarks = $request->remarks;
          $visit->save();

          return $this->sendResponse($visit, 'Record Added Successfully');

        } catch (\Exception $e) {
          //throw $th;
          return $this->sendError($e->getMessage(), 'error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {

      try {
        //code...
        $visit = Visitor::where('client_id', $request->client_id)->first();
        $visit->status = $request->status;
        $visit->remarks = $request->remarks;
        $visit->user_id = Auth::id();
        $visit->save();

        return $this->sendResponse($visit, 'Success');

      } catch (\Exception $e) {
        //throw $th;
        return $this->sendError('error');
      }
      
        // $visit->update([
        //   'user_id' => Auth::id()
        // ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
