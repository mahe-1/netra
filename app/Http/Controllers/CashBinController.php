<?php

namespace App\Http\Controllers;

use App\Models\CashBin;
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
            return view('pages/cash.index',['cashbins' => $cashbins]);
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
