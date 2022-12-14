@extends('layouts.default')


@section('content')


            <div class="content__boxed">
                <div class="content__wrap">

                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header">
			    <h5 class="card-title mb-3">Cash Bins</h5>
			    <div class="row">
				<div class="col-md-4" >
                                        <div class="mt-4 pt-3 d-flex justify-content-around">
                                                <div class="text-center">
                                                    <h4 class="mb-1">{{$cashin}}</h4>
                                                    <small class="text-muted">Cash In</small>
                                                </div>
                                                <div class="text-center">
                                                    <h4 class="mb-1">{{$count}}</h4>
                                                    <small class="text-muted">No Of Bins</small>
                                                </div>
					    </div>
				</div>

			    </div>
				<p>&nbsp;</p>				
			    <div class="row">

				 <div class="col-md-6 d-flex gap-1 align-items-center mb-3">
                                    <button class="btn btn-primary hstack gap-2 align-self-center" onclick="location.href = '/cashbins/request';">
                                        <i class="demo-psi-add fs-5"></i>
                                        <span class="vr"></span>
                                        Request Bin Out
                                    </button>
                                <!--    <button class="btn btn-icon btn-outline-light" aria-label="Print table">
                                        <i class="demo-pli-printer fs-5"></i>
                                    </button>
                                    <div class="btn-group">
                                        <button class="btn btn-icon btn-outline-light" aria-label="Information"><i class="demo-pli-exclamation fs-5"></i></button>
                                        <button class="btn btn-icon btn-outline-light" aria-label="Remove"><i class="demo-pli-recycling fs-5"></i></button>
                                    </div>-->
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
                                            <th>Amount</th>
                                            <th>Location</th>
                                            <th>Location Target</th>
                                            <th>Cheked Time</th>
                                            <th>Lock Status</th>
                                            <th>Online</th>
                                            <th>Permission</th>
                                            <th>History</th>
                                        </tr>
                                    </thead>
				    <tbody>
					@foreach($cashbins as $cb)
				
					<tr>
                                            <td><a href="#" class="btn-link">{{$cb->binnum}}</a></td>
                                            <td>{{$cb->amount}}</td>
                                            <td>{{$cb->location}}</td>
					    <td>{{$cb->location_target}}</td>
					    <td>{{$cb->lchecked_at}}</td>
					    <td>{{$cb->locked}}</td>
					    <td>{{$cb->online}}</td>
					    <td>{{$cb->permission}}</td>
					    <td><a href="#" class="btn-link">5 Transactions</a></td>
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



