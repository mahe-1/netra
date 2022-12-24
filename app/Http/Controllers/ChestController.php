<?php

namespace App\Http\Controllers;

use App\Models\Chest;
use App\Models\CashBin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChestController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function scanlist($id)
    {
	    Log::info("got scan list");

	    $results = json_decode(request()->getContent(), true);

	    //Log::info(print_r($results, true));
	    $tags=array();

	    if(is_array($results)){
	    	foreach($results as $r){

			Log::info("id=".$r['data']['idHex']);
			
			$hexid=$r['data']['idHex'];
			array_push($tags,$hexid);
		}
	    }

	CashBin::whereIn("tag1", $tags)->update(['location' => 'in']);
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
