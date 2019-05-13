@extends('frontend/master')
@section('content')

<aside id="qbootstrap-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url(template/images/hall.jpg);" height= "100">
				<div class="overlay-gradient"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 slider-text">
							<div class="slider-text-inner text-center">
								<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
								<h1>Halls</h1>

							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>

<section class="pricing py-5">
<div id="qbootstrap-rooms">
	<div class="container">

		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading animate-box">
				<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
				<h2>Halls</h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		@foreach ($halls as $hall)
		<!-- Project One -->
		<div class="row">
			

			<div class="col-md-7 room-wrap animate-box">
				<a href="{{$hall->photo}}" class="room image-popup-link" style="background-image: url({{$hall->photo}});"></a>
			</div>
			<div class="col-md-5  room-wrap animate-box">
				 <div class="desc">
					<h3>{{$hall->name}}</h3>
					<p class="price">
						
						<span class="price-room">$ {{$hall->price}}</span>
						<span class="per">/ per hour</span>
					</p>
					<ul>
						<li><i class="icon-check"></i> 
							{{$hall->capacity}}</li>
							<li><i class="fas fa-location-arrow"></i>{{$hall->location}}</li>
								
						</ul>
						<p><a class="btn btn-success" href="{{route('halls.show',$hall->id)}}">Book now!</a></p>
				</div>
			</div>
		</div>
			<!-- /.row -->

			<hr>

			@endforeach

		</div>
	</div>    
</section>
	@endsection