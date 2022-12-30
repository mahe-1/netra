<?php

namespace App\Http\Controllers;

use App\Models\Chest;
use App\Models\CashBin;
use App\Models\Alarm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ChestController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function scanlist($id)
    {
//	    Log::info("got scan list");

	    $results = json_decode(request()->getContent(), true);

	    #Log::info(print_r($results, true));
	    $tags=array();

	    if(is_array($results)){
	    	foreach($results as $r){

//			Log::info("id=".$r['data']['idHex']);
			
			$hexid=$r['data']['idHex'];
			array_push($tags,$hexid);
		}
	    }

	CashBin::whereIn("tag1", $tags)->update(['location' => 'in','lchecked_at' =>Carbon::now()]);
	    //	CashBin::->where('location_target','in')->update(['location' => 'missing']);
	DB::table('cash_bins')->whereRaw('location_target = "in" and lchecked_at < now() - interval 5  SECOND')->update(['location' => 'missing']);

       
	// Generate new alarams
	$cbs = CashBin::whereNotIn('binnum', function($query){
					    $query->select('resource')
					    ->from('alarms')
					    ->where('status', 0); //open alarm
	    })->where('location','missing')->get();

	foreach($cbs as $cb){
		
	     $id = DB::table('alarms')->insertGetId([
            'type' => 'MISSING_BIN',
            'resource' => $cb->binnum,
         ]);


	}

	// Clear old alarams
	//
	Alarm::whereIn('resource', function($query){
			$query->select('binnum')->from('cash_bins')->where('location','in');
	})->whereIn('status' , array(0,1))->update(['status'=>2]); // 0=open, 1=ack, 2=closed




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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
     * @param  \App\Models\Chest  $chest
     * @return \Illuminate\Http\Response
     */
    public function show(Chest $chest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chest  $chest
     * @return \Illuminate\Http\Response
     */
    public function edit(Chest $chest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chest  $chest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chest $chest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chest  $chest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chest $chest)
    {
        //
    }
}
