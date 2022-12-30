<?php

namespace App\Http\Controllers;

use App\Models\CashBin;
use App\Models\Order;
use Illuminate\Http\Request;

class CashBinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $cashbins = CashBin::get();
	    $count = count($cashbins);
	    $cashin = CashBin::where('location_target', 'in')->sum('amount');
	    
            return view('pages/cash.index',['cashbins' => $cashbins,'count'=>$count,'cashin'=>$cashin]);
    }

       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function requestcash()
    {
            $credit = Order::where('status', '1')->where('type','credit')->sum('amount');
	    $debit = Order::where('status', '1')->where('type','debit')->sum('amount');
	    $cashout = CashBin::where('location', 'out')->sum('amount');
	    $credit=$credit+$cashout;
	    $cashneed = $debit-$credit;
	    if($cashneed>0)
	    {
		$bins = CashBin::orderBy('locked_at', 'DESC')->get();
		foreach($bins as $bin){
			
			$cashneed = $cashneed - $bin->amount;
			$bin->location_target = 'out';
			$bin->save();

			if($cashneed <=0)
				break;
		}
	    }
	     return redirect()->route('cashbins');
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
     * @param  \App\Models\CashBin  $cashBin
     * @return \Illuminate\Http\Response
     */
    public function show(CashBin $cashBin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CashBin  $cashBin
     * @return \Illuminate\Http\Response
     */
    public function edit(CashBin $cashBin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CashBin  $cashBin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CashBin $cashBin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CashBin  $cashBin
     * @return \Illuminate\Http\Response
     */
    public function destroy(CashBin $cashBin)
    {
        //
    }
}
