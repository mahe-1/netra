@extends('layouts.default')


@section('content')

            <div class="content__boxed">
                <div class="content__wrap">

                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-3">Create New Order</h5>
                        </div>


			<div class="card-body">
                                            <div class="row mb-3">
                                                <label for="inputEmail3" class="col-sm-2 col-form-label">Requesting Bank</label>
                                                <div class="col-sm-10">
                                                    <input readonly type="text" name="branch" class="form-control" id="inputEmail3" value="{{$order->branch}}">
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <label for="inputPassword3" class="col-sm-2 col-form-label">Requesting Manager</label>
                                                <div class="col-sm-10">
                                                    <input readonly type="text" name="manager" class="form-control" id="inputPassword3" value="{{$order->manager}}" >
                                                </div>
                                            </div>


                                            <div class="row mb-3">
                                                <label for="_dm-inputAddress3" class="col-sm-2 form-label">Type</label>
						<div class="col-sm-10" >
							{{ Form::select('type', array('credit' => 'Credit', 'debit' => 'Debit'), $order->type, ['disabled', 'readonly' => 'true','class' => 'form-select'])}}
                                                </div>
                                            </div>

					    <div class="row mb-3">
                                                <label for="_dm-inputAddress3" class="col-sm-2 form-label">Amount</label>
                                                <div class="col-sm-10">
                                                    <input readonly id="_dm-inputAddress3" name="amount" type="text" class="form-control" placeholder="" value="{{$order->amount}}">
                                                </div>
					    </div>


				 <form method="POST" action="/order/{{$order->id}}/update" >
	                         @csrf
                                            <div class="row mb-3">
						<label for="_dm-inputAddress3" class="col-sm-2 form-label">Status</label>
						@if($order->status == 0)
	                                                <div class="col-sm-10">
        	                                                {{ Form::select('status',array('0' => 'Pending','1' => 'Accepted', '2' => 'Rejected'), $order->status, ['class' => 'form-select'])}}
							</div>
						@else
							@if($order->status==1)
                        	                        <div class="col-sm-10">
                                	                        {{ Form::select('status',array('1' => 'Accepted', '3' => 'Completed'), $order->status, ['class' => 'form-select'])}}
							</div>
							@endif	
						@endif
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                  </form>

                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>

@endsection
