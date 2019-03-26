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
				<h2>Halls</h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>


		<div class="row">
			@foreach ($halls as $hall)
			<div class="col-md-6 room-wrap animate-box">
				<a href="{{$hall->photo}}" class="room image-popup-link" style="background-image: url({{$hall->photo}});"></a>
			</div>

			<div class="col-md-6 room-wrap animate-box">
				
				<div class="desc">
					<h3><a href="">{{$hall->name}}</a></h3>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">{{$hall->price}}</span>
						<span class="per">/ per hour</span>
					</p>
					<ul>
						<li><i class="icon-check"></i> 
						{{$hall->capacity}}</li>
						<li><i class="icon-check"></i>{{$hall->location}}</li>
						<li><i class="icon-check"></i>{{$hall->description}}</li>
					</ul>
					<p><a class="btn btn-success" href="{{route('halls.show',$hall->id)}}">Book now!</a></p>
				</div>
			</div>
			@endforeach
		</div>

		
	</div>

</div>

@endsection