@extends('frontend/master')
@section('content')

<aside id="qbootstrap-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(template/images/1.jpg);">

			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
				   					<h1>Rooms &amp; Suites</h1>
										
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
						<h2>Rooms &amp; Suites</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="container">
				<div class="row">
						@foreach ($rooms as $room)  
					<div class="col-md-4 room-wrap animate-box">
						<a href="{{$room->photo}}" class="room image-popup-link" style="background-image: url({{$room->photo}});"></a>
					
						<div class="desc">
						<h3><a href="#">{{$room->room_categories->name}}</a></h3>
							<p class="price">
								
							<span class="price-room">${{$room->price}}</span>
								<span class="per">/ per night</span>
							</p>
							
							<ul>
							@if($room->aircorn=='1')
								<li><i class="fa fa-check-square text-dark"></i>Air-con</li>
							@else
								<li><i class="fas fa-times text-dark"></i>Air-con</li>
							@endif

							@if($room->wifi=='1')
								<li><i class="fa fa-check-square text-dark"></i>Wifi Include</li>
							@else
								<li><i class="fas fa-times text-dark"></i>Wifi does not Include</li>
							@endif

							@if($room->bathroom=='1')
								<li><i class="fa fa-check-square text-dark"></i>Bathroom Include</li>
							@else
								<li><i class="fas fa-times text-dark"></i>Bathroom does not Include</li>
							@endif

							@if($room->tv=='1')
								<li><i class="fa fa-check-square text-dark"></i>TV Include</li>
							@else
								<li><i class="fas fa-times text-dark"></i>TV does not Include</li>
							@endif

							<p>{{$room->description}}</p>
							</ul>
							<p><a class="btn btn-success" href="{{route('rooms.show',$room->id)}}">Book now!</a></p>
						</div>
					</div>
					@endforeach

				</div>
				{{ $rooms->links() }}
			</div>
		</div>
		</div>
@endsection