@extends('layouts.default')


@section('content')


            <div class="content__boxed">
                <div class="content__wrap">

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-3">Access Camera</h5>
                        </div>

                        <div class="card-body">




				<div class="d-md-flex gap-4">

                                <!-- File manager sidebar -->
                                <div class="w-md-160px w-xl-200px flex-shrink-0">

                                    <h5 class="px-3 mb-3">Dates</h5>
				    <div class="list-group list-group-borderless gap-1">
				
					@foreach($dtarray as $dt)
                                        <a href="/acam?seldt={{$dt}}" class="list-group-item list-group-item-action">
                                            <i class="demo-pli-folder fs-5 me-2"></i> {{$dt}}
					</a>
					@endforeach
                                    </div>
<!--
                                    <h5 class="px-3 mt-5 mb-3">Favorites</h5>
                                    <div class="list-group list-group-borderless gap-1">
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <i class="demo-pli-folder-with-document fs-5 me-2"></i> User folders
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <i class="demo-pli-camera-2 fs-5 me-2"></i> Photos
                                        </a>
                                        <a href="#" class="list-group-item list-group-item-action">
                                            <i class="demo-pli-video fs-5 me-2"></i> Videos
                                        </a>
                                    </div>

                                    <h5 class="px-3 mt-5 mb-3">Tags</h5>
                                    <div class="d-flex flex-wrap gap-2 px-3">
                                        <a href="#" class="btn btn-outline-light btn-xs">Family</a>
                                        <a href="#" class="btn btn-outline-light btn-xs">Home</a>
                                        <a href="#" class="btn btn-outline-light btn-xs">Work</a>
                                        <a href="#" class="btn btn-outline-light btn-xs">Films</a>
                                        <a href="#" class="btn btn-outline-light btn-xs">Musics</a>
                                        <a href="#" class="btn btn-outline-light btn-xs">Videos</a>
				    </div>
-->

                                </div>
                                <!-- END : File manager sidebar -->

                                <div class="vr"></div>

                                <!-- File manager content -->
                                <div class="flex-fill">

                                    <!-- Folder name and path -->
                                    <h2 class="d-flex align-items-center gap-3">
                                        <i class="demo-pli-folder-with-document fs-4"></i>Unauthorized Access ({{$seldt}})
                                    </h2>
                                    
                                    <!-- END : Folder name and path -->
				
				<div class="row g-1 mb-3 d-md-flex">
				@foreach($images as $image)
                                <div class="col-4">
                                    <img class="img-fluid rounded" src="{{$image}}" alt="thumbs" loading="lazy">
                                </div>
				@endforeach	       
                                </div>
				
                                    <!-- Folder view -->
                                   
 
                                    <!-- END : Folder view -->

                                </div>
                                <!-- END : File manager content -->

                            </div>






                        </div> <!-- card-body -->
                    </div> <!-- card -->

                </div> <!-- content__wrap -->
            </div> <!-- content_boxed -->

	@endsection



