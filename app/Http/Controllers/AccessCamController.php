<?php

namespace App\Http\Controllers;

use App\Models\AccessCam;
use Illuminate\Http\Request;

class AccessCamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    //
	    //
	
	$seldt=request('seldt');
    	if($seldt==null){
        	$seldt= date("Y-m-d");
        }

	$dtarray = array();

        if ($handle = opendir(public_path()."/imgthumb/")) {

        while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
                        $dtarray[$entry] = $entry;
                }
	     }
	}

	krsort($dtarray); 


	$imgarray = array();
	$target_dir = public_path()."/imgthumb/".$seldt."/" ;
	$search = $target_dir. "*.jpg";
	$files = glob($search);

	foreach ($files as $filename) {

		$filename_b = "/imgthumb/".$seldt."/" . basename($filename);
		//$filename_big = str_replace(".jpg-s","",$filename_s);
		array_push($imgarray,$filename_b);

	}

	//rsort($imgarray);

	return  view('pages/acam/index',['dtarray' => $dtarray,'images' => $imgarray , 'seldt'=>$seldt]);

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
     * @param  \App\Models\AccessCam  $accessCam
     * @return \Illuminate\Http\Response
     */
    public function show(AccessCam $accessCam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AccessCam  $accessCam
     * @return \Illuminate\Http\Response
     */
    public function edit(AccessCam $accessCam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AccessCam  $accessCam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AccessCam $accessCam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AccessCam  $accessCam
     * @return \Illuminate\Http\Response
     */
    public function destroy(AccessCam $accessCam)
    {
        //
    }
}
