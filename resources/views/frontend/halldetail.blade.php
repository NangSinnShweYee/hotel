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
                    @csrf
                      <label for="name">Start Time:</label>
                      <input type="time" class="form-control" 
                      name="start_time"/>
                    @if ($errors->has('start_time'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('start_time') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <i class="icon icon-calendar2"></i>
                    <label for="name">End Time:</label>
                      <input type="time" class="form-control" 
                      name="end_time"/>
                    @if ($errors->has('end_time'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('end_time') }}</strong>
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
