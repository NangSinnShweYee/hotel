<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hotel Booking System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by QBOOTSTRAP.COM" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="QBOOTSTRAP.COM" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by QBOOTSTRAP.COM
		
	Website: 		http://qbootstrap.com/
	Email: 			info@qbootstrap.com
	Twitter: 		http://twitter.com/Q_bootstrap
	Facebook: 		https://www.facebook.com/Qbootstrap

	//////////////////////////////////////////////////////
-->

<!-- Facebook and Twitter integration -->
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

<!-- Animate.css -->
<link rel="stylesheet" href="{{ asset('template/css/animate.css') }}">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="{{ asset('template/css/icomoon.css') }}">
<!-- Bootstrap  -->
<link rel="stylesheet" href="{{ asset('template/css/bootstrap.css') }}">

<!-- Magnific Popup -->
<link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">

<!-- Flexslider  -->
<link rel="stylesheet" href="{{ asset('template/css/flexslider.css') }}">

<!-- Owl Carousel -->
<link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">

<link rel="stylesheet" href="{{ asset('template/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">

<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('template/css/bootstrap-datepicker.css') }}">

<!-- Theme style  -->
<link rel="stylesheet" href="{{ asset('template/css/style.css') }}">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- Modernizr JS -->
<script src="{{ asset('template/js/modernizr-2.6.2.min.js') }}"></script>
<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">



</head>
<body>

	<div class="qbootstrap-loader"></div>

	<div id="page">
		<!--header -->
		@include('frontend/header')
		<!--header -->

		<!--Content-->
		@yield('content')


		<!--Footer-->
		@include('frontend/footer')
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('template/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('template/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('template/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('template/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('template/js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('template/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('template/js/magnific-popup-options.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('template/js/jquery.countTo.js')}}"></script>
	<!-- Date Picker -->
	<script src="{{asset('template/js/bootstrap-datepicker.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('template/js/main.js')}}"></script>
	
</body>
</html>

