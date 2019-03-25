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
<div id="qbootstrap-rooms">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Day Tour in Rangoon</h2>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<img src="{{asset('template/images/tour.jpg')}}" alt="">

					</div>

					<div class="col-md-4">
						

					</div>
					<div class="col-md-4">
						

					</div>
			</div>
		</div>
@endsection