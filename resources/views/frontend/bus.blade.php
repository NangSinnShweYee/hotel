@extends('frontend/master')
@section('content')



<section class="pricing py-5">
	<div class="container">
		<div class="row">
			@foreach ($bus_packages as $bus)
			<!-- Free Tier -->
			<div class="col-lg-4">
				<div class="card mb-5 mb-lg-0">
					<div class="card-header">
						<h2 class="text-center">{{$bus->name}}</h2>
					</div>
					<div class="card-body">
						<img src="{{$bus->photo}}" alt="" class="card-img-top">
						<h5 class="card-title text-muted text-uppercase text-center">Price</h5>
						<h5 class="card-price text-center pb-4">{{$bus->price}}<span class="period">/person</span></h5>

						<ul class="list-unstyled">
							<li>{{$bus->places}}</li>
							<li>{{$bus->description}}</li>
							<li>{{$bus->depature_time}}</li>
							<li>{{$bus->arrival_time}}</li>
							@if($bus_packages->guide=='1')
								<li><i class="far fa-flag text-dark"></i> Guide included </li>
							@else
								<li><i class="fas fa-times text-dark"></i>Guide not included</li>
							@endif 
					</ul>
					<a href="{{route('bus_packages.show',$bus->id)}}" class="btn btn-block btn-primary text-uppercase">More Info</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

@endsection