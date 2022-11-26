<?php

namespace App\Http\Controllers;

use App\Models\Alarm;
use Illuminate\Http\Request;

class AlarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $alarms = Alarm::get();
         return view('pages/alarms.index',['alarms' => $alarms]);
    }

    public function jindex()
    {
         $alarms = Alarm::get();
         return $alarms;
    }

    public function jcount()
    {
         $ac = Alarm::get()->where('status', '=', 0)->count();
         return "".$ac;
    }

    public function jstore(Request $request)
    {
        $alarm = new Alarm();
        $data = $request->only($alarm->getFillable());
        $alarm->fill($data)->save();

        return "hi";

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
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function show(Alarm $alarm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function edit(Alarm $alarm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alarm $alarm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alarm  $alarm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alarm $alarm)
    {
        //
    }
}
