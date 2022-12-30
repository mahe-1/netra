@extends('layouts.default')


@section('content')


            <div class="content__boxed">
                <div class="content__wrap">

                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header">
			    <h5 class="card-title mb-3">Order Status</h5>
			    <div class="row">
				<div class="col-md-4" >
                                        <div class="mt-4 pt-3 d-flex justify-content-around">
                                                <div class="text-center">
                                                    <h4 class="mb-1">{{$credit}}</h4>
                                                    <small class="text-muted">Pending Credit</small>
                                                </div>
                                                <div class="text-center">
                                                    <h4 class="mb-1">{{$debit}}</h4>
                                                    <small class="text-muted">Pending Debit</small>
						</div>
                                                <div class="text-center">
                                                    <h4 class="mb-1">{{$cashout}}</h4>
                                                    <small class="text-muted">Cash Out</small>
						</div>
					    </div>
				</div>

			    </div>
				<p>&nbsp;</p>				
                            <div class="row">

                                <!-- Left toolbar -->
				<div class="col-md-6 d-flex gap-1 align-items-center mb-3">
				
                                </div>
                                <!-- END : Left toolbar -->

                                <!-- Right Toolbar -->
                                <div class="col-md-6 d-flex gap-1 align-items-center justify-content-md-end mb-3">
                                    <div class="form-group">
                                        <input type="text" placeholder="Search..." class="form-control" autocomplete="off">
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light" aria-label="Download"><i class="demo-pli-download-from-cloud fs-5"></i></button>
                                        <div class="btn-group dropdown">
                                            <button class="btn btn-icon btn-outline-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="visually-hidden">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                <li>
                                                    <hr class="dropdown-divider">
                                                </li>
                                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END : Right Toolbar -->

                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Order date</th>
                                            <th>Manager</th>
                                            <th>Branch</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
				    <tbody>
					@foreach($orders as $order)
				
					<tr>
                                            <td><a href="#" class="btn-link">{{$order->id}}</a></td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i> Oct 22, 2021</span></td>
                                            <td>{{$order->manager}}</td>
                                            <td>{{$order->branch}}</td>
                                            <td>{{$order->type}}</td>
                                            <td>{{$order->amount}}</td>
					    <td class="text-center fs-5">
						 <div class="d-block badge bg-info">{!!Helper::order_status_text($order->status)!!}</div>
					    </td>
					    <td class="text-center text-nowrap">
						<!--                                                <a class="btn btn-icon btn-sm btn-primary btn-hover" href="#"><i title="Accept"  class="demo-pli-pen-5 fs-5"></i></a>
                                                <a class="btn btn-icon btn-sm btn-success btn-hover" href="#"><i title="Complete" class="demo-pli-pen-5 fs-5"></i></a>
						<a class="btn btn-icon btn-sm btn-danger btn-hover" href="#"><i title="Reject" class="demo-pli-pen-5 fs-5"></i></a>

						-->
						<a href="/order/{{$order->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a>
                                            </td>
					</tr>
				
					@endforeach
                                    </tbody>
                                </table>
                            </div>

                            <nav class="text-align-center mt-5" aria-label="Table navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- END : Table with toolbar -->

                </div>
            </div>

	@endsection



