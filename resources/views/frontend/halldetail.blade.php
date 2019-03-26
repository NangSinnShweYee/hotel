@extends('frontend/master')
@section('content')




<section class="py-5 bg-mylight" style="margin-top:18px;">
    <div class="container">
        <img src="{{asset($halls->photo)}}" class="img-fluid" width="700px" alt="">
        <h1>{{$halls->name}}</h1>
        <h3>{{$halls->description}}</h3>
        <p class="price" style="color:black">            
            <span class="currency">$</span>
            <span class="price-room">{{$halls->price}}</span>
            <span class="per">/ per hour</span>
        </p>
        @if(session()->get('overlap'))    
            <div class="alert alert-danger">
            {{ session()->get('overlap') }}  
            </div><br />
        @endif

        <form method="post" action="{{route('hall_bookings.store')}}">

            <div class="row">
                <div class="col-md-3">
                    <i class="icon icon-calendar2"></i>
                    <input type="hidden" name="hall_id" value="{{$halls->id}}">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="date" id="date" name="check_in"
                        class="form-control {{ $errors->has('check_in') ? ' is-invalid' : '' }}"
                        placeholder="Check-in date">
                    @if ($errors->has('check_in'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('check_in') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <i class="icon icon-calendar2"></i>
                    <input type="date" id="date" name="check_out" class="form-control {{ $errors->has('check_out') ? ' is-invalid' : '' }}" placeholder="Check-out date">
                @if ($errors->has('check_out'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('check_out') }}</strong>
                </span>
                @endif
                </div>
            </div>
            <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary">
            @csrf
        </form>
    </div>

</section>



@endsection
