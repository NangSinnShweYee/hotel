@extends('frontend/master')
@section('content')

<aside id="qbootstrap-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(frontend/images/1.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
				   					<h1>Rooms &amp; Suites</h1>
										<h2>100% Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

	<div id="qbootstrap-reservation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-wrap">
						<form method="post" class="qbootstrap-form">
		              	<div class="row">
		                <div class="col-md-3">
		                  <div class="form-group">
		                    <label for="date">Check-in:</label>
		                    <div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" id="date" class="form-control date" placeholder="Check-in date">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-3">
		                  <div class="form-group">
		                    <label for="date">Check-out:</label>
		                    <div class="form-field">
		                      <i class="icon icon-calendar2"></i>
		                      <input type="text" id="date" class="form-control date" placeholder="Check-out date">
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="adults">Adults</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">2</option>
		                        <option value="#">3</option>
		                        <option value="#">4</option>
		                        <option value="#">5+</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <div class="form-group">
		                    <label for="children">Children</label>
		                    <div class="form-field">
		                      <i class="icon icon-arrow-down3"></i>
		                      <select name="people" id="people" class="form-control">
		                        <option value="#">1</option>
		                        <option value="#">2</option>
		                        <option value="#">3</option>
		                        <option value="#">4</option>
		                        <option value="#">5+</option>
		                      </select>
		                    </div>
		                  </div>
		                </div>
		                <div class="col-md-2">
		                  <input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
		                </div>
		              </div>
		            </form>
					</div>
				</div>
			</div>
		</div>
		<div id="qbootstrap-rooms">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center qbootstrap-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Rooms &amp; Suites</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 room-wrap animate-box">
						<a href="#" class="room image-popup-link" style="background-image: url(template/images/1.jpg);"></a>
						
						<div class="desc">
							<h3><a href="rooms-suites.html">Suite</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">149</span>
								<span class="per">/ per night</span>
							</p>
							<ul>
								<li><i class="icon-check"></i> Only 10 rooms are available</li>
								<li><i class="icon-check"></i> Breakfast included</li>
								<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
							</ul>
							<p><a class="btn btn-primary">Book now!</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="#" class="room image-popup-link" style="background-image: url(template/images/2.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Double Room</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">199</span>
								<span class="per">/ per night</span>
							</p>
							<ul>
								<li><i class="icon-check"></i> Perfect for traveling couples</li>
								<li><i class="icon-check"></i> Breakfast included</li>
								<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
							</ul>
							<p><a class="btn btn-primary">Book now!</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="#" class="room image-popup-link" style="background-image: url(template/images/3.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Family Room</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">249</span>
								<span class="per">/ per night</span>
							</p>
							<ul>
								<li><i class="icon-check"></i> Two double beds</li>
								<li><i class="icon-check"></i> Babysitting facilities</li>
								<li><i class="icon-check"></i> 1 free bed available on request</li>
							</ul>
							<p><a class="btn btn-primary">Book now!</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/room-4.jpg" class="room image-popup-link" style="background-image: url(template/images/1.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Classic Double Room</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">179</span>
								<span class="per">/ per night</span>
							</p>
							<ul>
								<li><i class="icon-check"></i> Only 10 rooms are available</li>
								<li><i class="icon-check"></i> Breakfast included</li>
								<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
							</ul>
							<p><a class="btn btn-primary">Book now!</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/room-5.jpg" class="room image-popup-link" style="background-image: url(template/images/3.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Superior Double Room</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">270</span>
								<span class="per">/ per night</span>
							</p>
							<ul>
								<li><i class="icon-check"></i> Perfect for traveling couples</li>
								<li><i class="icon-check"></i> Breakfast included</li>
								<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
							</ul>
							<p><a class="btn btn-primary">Book now!</a></p>
						</div>
					</div>
					<div class="col-md-4 room-wrap animate-box">
						<a href="images/room-5.jpg" class="room image-popup-link" style="background-image: url(template/images/2.jpg);"></a>
						<div class="desc">
							<h3><a href="rooms-suites.html">Superior Double Room</a></h3>
							<p class="price">
								<span class="currency">$</span>
								<span class="price-room">270</span>
								<span class="per">/ per night</span>
							</p>
							<ul>
								<li><i class="icon-check"></i> Perfect for traveling couples</li>
								<li><i class="icon-check"></i> Breakfast included</li>
								<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
							</ul>
							<p><a class="btn btn-primary">Book now!</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection