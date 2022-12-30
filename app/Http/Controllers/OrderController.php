<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\CashBin;
use App\Helpers\Helper;



class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $orders = Order::get();
	    $credit = Order::where('status', '1')->where('type','credit')->sum('amount');
	    $debit = Order::where('status', '1')->where('type','debit')->sum('amount');
     	    $cashout = CashBin::where('location_target', 'out')->sum('amount');

	    if(Helper::isbranchadmin())
		    return view('pages/orders.index',['orders' => $orders]);
	    else
		    return view('pages/orders.index_cash',['credit' => $credit, 'debit' => $debit ,'cashout' => $cashout ,'orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	//
	return view('pages/orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
	$order = new Order();
    	$data = $request->only($order->getFillable());	
        $order->fill($data)->save();

	return redirect()->route('orders');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
	$order = Order::find($id);
        if(Helper::isbranchadmin())
        	return view('pages/orders.index',['order' => $order]);
        else
             	return view('pages/orders.edit_cash',['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $order = Order::find($id);
	if(Helper::iscashadmin())
	{
		$status = request('status');
		if($status){
			$order->status = $status ;
			$order->save();
		}
	}

	 return redirect()->route('orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
