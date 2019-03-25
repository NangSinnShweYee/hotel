@extends('frontend/master')
@section('content')




<section class="py-5 bg-mylight">
    <div class="container">
        <img src="{{asset($rooms->photo)}}" class="img-fluid" width="700px" alt="">
        <h1>{{$rooms->room_categories->name}}</h1>
        <h3>{{$rooms->description}}</h3>
        <p class="price">
            <span class="currency">$</span>
            <span class="price-room">{{$rooms->price}}</span>
            <span class="per">/ per night</span>
        </p>

    <form method="post" action="{{route('room_bookings.store')}}">

            <div class="row">
                <div class="col-md-3">
                    <i class="icon icon-calendar2"></i>
                <input type="hidden" name="room_id" value="{{$rooms->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="date" id="date" name="check_in" class="form-control" placeholder="Check-in date">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <i class="icon icon-calendar2"></i>
                    <input type="date" id="date" name="check_out" class="form-control" placeholder="Check-out date">
                </div>
            </div>
            <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary">
        @csrf
        </form>
    </div>

</section>



@endsection
