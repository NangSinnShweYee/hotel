@extends('frontend/master')
@section('content')


<div class="page py-5">
    <div id="qbootstrap-blog">
        <div class="container">
            <form class="form-inline" method="post" action="{{route('dining_bookings.store')}}">
                <div class="row">
                    <div class="col-md-12">
                        <article class="animate-box">
                            <div class="blog-img">
                                <img src="{{asset($dinings->photo)}}" class="img-fluid" width="800px" alt="">
                            </div>
                            <div class="desc">

                                <h2>{{$dinings->name}}</h2>
                                <h4>{{$dinings->description}}</h4>
                                <div class="row">
                                    <div class="col-md-2">
                                       <h1 class="price text-center">            
                                        <span class="currency">$ {{$dinings->price}}</span> 
                                    </h1>
                                </div>
                                <div class="col-md-8 form-inline">
                                    
                                    <h4>Number of People: {{$dinings->capacity}}</h4>
                                </div>
                                <div class="col-md-2">
                                   <i class="icon icon-calendar2"></i>
                                   <input type="hidden" name="dining_id" value="{{$dinings->id}}">
                                   <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                   <input type="date" id="date" name="date"
                                   class="form-control {{ $errors->has('date') ? ' is-invalid' : '' }}"
                                   placeholder="booking date">
                                   @if ($errors->has('date'))
                                   <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('date') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                               <input type="submit" name="submit" id="submit" value="Book" class="btn btn-primary">
                                @csrf
                           </div>
                       </div>
                   </div>
               </article>
           </div>
       </div>
   </form>
</div>
</div>
</div>






@endsection
