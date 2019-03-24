@extends('frontend/master')
@section('content')




<section class="py-5 bg-mylight">
    <div class="container">
        <img src="{{$room->photo}}" class="img-fluid" width="700px" alt="">
        <h1>{{$room->room_categories->name}}</h1>
        <h3>{{$room->description}}</h3>
        <p class="price">
            <span class="currency">$</span>
            <span class="price-room">{{$room->price}}</span>
            <span class="per">/ per night</span>
        </p>

        <form method="post" action="">
            <div class="row">
                <div class="col-md-3">
                    <i class="icon icon-calendar2"></i>
                    <input type="text" id="date" class="form-control date" placeholder="Check-in date">
                </div>
                <div class="col-md-3">
                    <i class="icon icon-calendar2"></i>
                    <input type="text" id="date" class="form-control date" placeholder="Check-out date">
                </div>

            </div>
            <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary">
        
        </form>
    </div>

</section>



@endsection
