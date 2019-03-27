@extends('frontend/master')
@section('content')

<div class="container py-5">
	<form method="post" action="{{route('bus_bookings.store')}}">
	<div class="row">
		<div class="col-md-6">
			<img src="{{asset($bus_packages->photo)}}" class="w-100 h-100">
		</div>
		<div class="col-md-6">
			<h2 class="text-center">{{$bus_packages->name}}</h2>
			<ul> 
							<li>{{$bus_packages->places}}</li>
							<li>{{$bus_packages->description}}</li>
							<li>{{$bus_packages->depature_time}}</li>
							<li>{{$bus_packages->arrival_time}}</li>
							<li>{{$bus_packages->guide}}</li> 
					</ul>
			 <p class="price" style="color:black">            
            <span class="currency">$</span>
            <span class="price-room">{{$bus_packages->price}}</span>
            <span class="per">/ per one</span>
        </p>
        <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary">
            @csrf
		</div>
		
	</div>
</form>
</div>


@endsection