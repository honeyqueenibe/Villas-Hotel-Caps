@extends('frontlayout')
@section('content')
<!-- Service Section Start -->
<div class="container my-4">
		<h1 class="text-center " id="services">Services</h1>
		@foreach($services as $service)
		<div class="row my-4">
			<div class="col-md-3">
				<a href="{{url('service/'.$service->id)}}"><img class="img-thumbnail" style="width:100%;" src="{{asset($service->photo)}}" /></a>
			</div>
			<div class="col-md-8">
				<h3>{{$service->title}}</h3>
				<p>{{$service->small_desc}}</p>
				<p>
					<a href="{{url('service/'.$service->id)}}" class="btn btn-primary">Read More</a>
				</p>
			</div>
		</div>
		@endforeach
	</div>
	<!-- Service Section End -->
<!-- Gallery Section Start -->
	<div class="container my-4">
		<h1 class="text-center border-bottom" id="gallery">Gallery</h1>
		<div class="row my-4">
			@foreach($roomTypes as $rtype)
			<div class="col-md-3">
				<div class="card">
					<h5 class="card-header">{{$rtype->title}}</h5>
					<div class="card-body">
						@foreach($rtype->roomtypeimgs as $index => $img)
                        	<a href="{{asset($img->img_src)}}" data-lightbox="rgallery{{$rtype->id}}">
                        		@if($index > 0)
                        		<img class="img-fluid hide" src="{{asset($img->img_src)}}"/>
                        		@else
                        		<img class="img-fluid" src="{{asset($img->img_src)}}"/>
                        		@endif
                        	</a>
                        </td>
                        @endforeach
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	
	<!-- Gallery Section End -->
	<!-- testimonial Slider Section Start -->
	<h1 class="text-center mt-5" id="gallery">Testimonials</h1>
	<div id="testimonials" class="carousel slide p-5 bg-secondary text-white border mb-5" data-bs-ride="carousel">
	  <div class="carousel-inner">
	  	@foreach($testimonials as $index => $testi)
	    <div class="carousel-item @if($index==0) active @endif">
	      	<figure class="text-center">
			  <blockquote class="blockquote">
			    <h5>{{$testi->testi_cont}}</h5>
				
			  </blockquote>
			  
			</figure>
	    </div>
		
	    @endforeach
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true" style=""></span>
	    <span class="visually-hidden">Next</span>
	  </button>
	</div>
	<!-- testimonial Section End -->
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/vendor/fontawesome-free/css/lightbox.min.css" />
<!-- LightBox Js -->
<script type="text/javascript" src="http://localhost:8000/vendor/fontawesome-free/js/lightbox.min.js"></script>
<style type="text/css">
	.hide{
		display: none;
	}
</style>
@endsection