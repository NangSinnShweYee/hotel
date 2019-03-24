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
				<h2>Dining</h2>
				<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 room-wrap animate-box">
				<a href="template/images/hall1.jpg" class="room image-popup-link" style="background-image: url(template/images/hall1.jpg);"></a>
				<div class="desc">
					<h3><a href="rooms-suites.html">Crystal Ballroom</a></h3>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">149</span>
						<span class="per">/ per hour</span>
					</p>
					<ul>
						<li><i class="icon-check"></i> 
						Capacity 300</li>
						<li><i class="icon-check"></i> Location 1F</li>
						<li><i class="icon-check"></i>Surface area: 445 m<sup>2</sup></li>
					</ul>
					<p><a class="btn btn-primary">Book now!</a></p>
				</div>
			</div>
			<div class="col-md-6 room-wrap animate-box">
				<a href="template/images/hall2.jpg" class="room image-popup-link" style="background-image: url(template/images/hall2.jpg);"></a>
				<div class="desc">
					<h3><a href="rooms-suites.html">Grand Ballroom</a></h3>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">199</span>
						<span class="per">/ per hour</span>
					</p>
					<ul>
					<li><i class="icon-check"></i> 
						Capacity 540</li>
						<li><i class="icon-check"></i> Location 2F</li>
						<li><i class="icon-check"></i>Surface area: 700 m<sup>2</sup></li>
					</ul>
					<p><a class="btn btn-primary">Book now!</a></p>
				</div>
			</div>
			<div class="col-md-6 room-wrap animate-box">
				<a href="template/images/hall3.jpg" class="room image-popup-link" style="background-image: url(template/images/hall3.jpg);"></a>
				<div class="desc">
					<h3><a href="rooms-suites.html">Meeting Room</a></h3>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">249</span>
						<span class="per">/ per hour</span>
					</p>
					<ul>
						
						<li><i class="icon-check"></i>U Shaped: 30 capacity</li>
						<li><i class="icon-check"></i>Theatre style: 90 capacity</li>
						<li><i class="icon-check"></i>Surface area: 92 m<sup>2</sup></li>
					</ul>
					<p><a class="btn btn-primary">Book now!</a></p>
				</div>
			</div>
			<div class="col-md-6 room-wrap animate-box">
				<a href="template/images/hall4.jpg" class="room image-popup-link img-silder" style="background-image: url(template/images/hall4.jpg);"></a>
				<div class="desc">
					<h3><a href="rooms-suites.html">Banquet Hall Pushkin</a></h3>
					<p class="price">
						<span class="currency">$</span>
						<span class="price-room">179</span>
						<span class="per">/ per hour</span>
					</p>
					<ul>
						<li><i class="icon-check"></i> 
						Capacity 100</li>
						<li><i class="icon-check"></i> Location 1F</li>
						<li><i class="icon-check"></i>Surface area: 130 m<sup>2</sup></li>
					</ul>
					<p><a class="btn btn-primary">Book now!</a></p>
				</div>
			</div>

		</div>
	</div>
	
	@endsection