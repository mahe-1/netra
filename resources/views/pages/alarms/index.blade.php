@extends('layouts.default')


@section('content')


            <div class="content__boxed">
                <div class="content__wrap">

                    <!-- Table with toolbar -->
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-3">Alarms</h5>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Location</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
				    <tbody>
					@foreach($alarms as $alarm)
				
					<tr>
                                            <td><a href="#" class="btn-link">{{$alarm->id}}</a></td>
                                            <td><span class="text-muted"><i class="demo-pli-clock"></i>>{{$alarm->created_at}}</span></td>
                                            <td>{{$alarm->type}}</td>
                                            <td>{{$alarm->resource}}</td>
					    <td class="text-center fs-5">
							@if($alarm->status == 0)
								 <div class="d-block badge bg-info">Standing</div>
							 @else
								@if($alarm->status == 1)
								 	<div class="d-block badge bg-success">Acknowledged</div>
								@else
									<div class="d-block badge bg-success">Closed</div>	
								@endif
                                                        @endif
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



