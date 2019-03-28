@extends('frontend/master')
@section('content')




<section class="py-5 bg-mylight" style="margin-top:18px;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="{{asset($rooms->photo)}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-5">
                <h1>{{$rooms->room_categories->name}}</h1>
                <h3>{{$rooms->description}}</h3>
                <p class="price" style="color:black">            
                    <span class="currency">$</span>
                    <span class="price-room">{{$rooms->price}}</span>
                    <span class="per">/ per night</span>
                </p>
                <ul class="list-unstyled">
                            @if($rooms->aircorn=='1')
                                <li><i class="fas fa-snowflake text-dark"></i>Air-con</li>
                            @else
                                <li><i class="fas fa-times text-dark"></i>Air-con</li>
                            @endif

                            @if($rooms->wifi=='1')
                                <li><i class="fas fa-wifi text-dark"></i>Wifi</li>
                            @else
                                <li><i class="fas fa-times text-dark"></i>Wifi</li>
                            @endif

                            @if($rooms->bathroom=='1')
                                <li><i class="fas fa-bath text-dark"></i>Bathroom</li>
                            @else
                                <li><i class="fas fa-times text-dark"></i>Bathroom</li>
                            @endif

                            @if($rooms->tv=='1')
                                <li><i class="fas fa-tv text-dark"></i>TV</li>
                            @else
                                <li><i class="fas fa-times text-dark"></i>TV</li>
                            @endif

                            <p>{{$rooms->description}}</p>
                        </ul>
                @if(session()->get('overlap'))    
                <div class="alert alert-danger">
                    {{ session()->get('overlap') }}  
                </div><br />
                @endif

                <form method="post" action="{{route('room_bookings.store')}}" class="form-inline">

                    <div class="row">
                        <div class="col-md-6">
                            <i class="icon icon-calendar2"></i>
                            <input type="hidden" name="room_id" value="{{$rooms->id}}">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <label for="check_in">Check In</label>
                            <input type="date" id="date" name="check_in"
                            class="form-control {{ $errors->has('check_in') ? ' is-invalid' : '' }}"
                            placeholder="Check-in date">
                            @if ($errors->has('check_in'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('check_in') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <i class="icon icon-calendar2"></i>
                            <label for="check_out">Check Out</label>
                            <input type="date" id="date" name="check_out" class="form-control {{ $errors->has('check_out') ? ' is-invalid' : '' }}" placeholder="Check-out date">
                            @if ($errors->has('check_out'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('check_out') }}</strong>
                            </span>
                            @endif
                        </div>
                        
                        </div>

                         <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary my-5">
                    @csrf

                </form>
            </div>
        </div>
        
        
    </div>

</section>



@endsection
