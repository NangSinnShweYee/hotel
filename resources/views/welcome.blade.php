@extends('frontend/master')
@section('content')
@if(session()->get('success'))    
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
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
                                    <h1>We offer you the best hotel</h1>
                                        <h2>100% Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
                                        <p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(template/images/2.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                                    <h1>Perfect Place for Dining</h1>
                                        <h2>100% Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
                                        <p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(template/images/3.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container-fluids">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 slider-text">
                                <div class="slider-text-inner text-center">
                                    <span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
                                    <h1>Welcome to our Hotel</h1>
                                        <h2>100% Free html5 templates Made by <a href="http://qbootstrap.com/" target="_blank">QBootstrap.com</a></h2>
                                        <p><a class="btn btn-primary btn-demo" href="#"></i> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>     
                </ul>
            </div>
        </aside>
@endsection
