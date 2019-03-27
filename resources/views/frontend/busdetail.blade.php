@extends('frontend/master')
@section('content')

<div class="container py-5">
	<form method="post" action="{{route('bus_bookings.store')}}">
	<div class="row">
		<div class="col-md-6">
			<input type="hidden" name="bus_id" value="{{$bus_packages->id}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
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
         <input type="date" id="date" name="date"
                                   class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}"
                                   placeholder="booking date">
                                   @if ($errors->has('date'))
                                   <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                                @endif
        <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary">
            @csrf
		</div>
		
	</div>
</form>
</div>


@endsection