@extends('frontend/master')
@section('content')

<section class="pricing py-5">
	<div class="container">
		@foreach ($dinings as $dining)
		<div class="row">
			<!-- Free Tier -->
			<div class="col-lg-4 ">
				<div class="card mb-5 mb-lg-0">
					
					<div class="card-body">
						<a href="{{$dining->photo}}"><img class="card-img-top img-fluid" src="{{$dining->photo}}"></a>
					</div>
					<div class="card-header">
						<h2 class="text-center">{{$dining->name}}</h2>

						
					</div>
					<div class="card-footer">
						<a href="{{route('dinings.show',$dining->id)}}" title="" class="btn btn-success w-100">Book Now</a>
					</div>

				</div>
			</div>
		@endforeach

	</div>
</section>

@endsection