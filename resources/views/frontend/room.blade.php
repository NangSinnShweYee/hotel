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
						@foreach ($rooms as $room)  
					<div class="col-md-4 room-wrap animate-box">
						<a href="{{$room->photo}}" class="room image-popup-link" style="background-image: url({{$room->photo}});"></a>
					
						<div class="desc">
						<h3><a href="#">{{$room->room_categories->name}}</a></h3>
							<p class="price">
								<span class="currency">$</span>
							<span class="price-room">{{$room->price}}</span>
								<span class="per">/ per night</span>
							</p>
							<ul>
								{{-- <li><i class="icon-check"></i> Only 10 rooms are available</li>
								<li><i class="icon-check"></i> Breakfast included</li>
								<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li> --}}
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
@endsection