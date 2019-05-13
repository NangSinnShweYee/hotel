@extends('backend/main')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }

</style>
<div class="card uper">
    <div class="card-header">
        Edit Room
    </div>
    <!-- {{$rooms}} -->
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif
        <div class="container">
            <form method="post" action="{{ route('rooms.update',$rooms->id) }}" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="category_id" class="col-md-4 control-label">Category</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach


                    </select>
                </div>
                <div class="form-group">
                    @csrf
                    <label for="name">Room Number:</label>
                    <input type="text" class="form-control" name="room_number" value="{{$rooms->room_number}}" />
                </div>
                <div class="form-group">



                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                aria-controls="home" aria-selected="true">Old Image</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="false">New Image</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="myTabContent">
                        @php
                        $photos = json_decode($rooms->photo);
                        @endphp
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            @foreach ($photos as $key => $photo)

                            <img src="{{$photo}}" class="img-fluid" alt="" width="200px">
                            @endforeach
                            {{-- <img src="{{asset($rooms->photo)}}" class="img-fluid"> --}}
                            <input type="hidden" name="oldimage" value="{{$rooms->photo}}">
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"><label
                                for="photo" class="col-md-4 control-label">Photo</label>
                            <input type="file" name="photo[]" multiple=""
                                class="form-control-file {{ $errors->has('photo') ? ' is-invalid' : '' }}" />
                            @if ($errors->has('photo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('photo') }}</strong>
                            </span>
                            @endif</div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                </div>

                <div class="row">
                <div class="form-group">  
                @csrf                      
                       <label for="wifi">Wifi</label>
                       <input type="hidden" name="wifi" value="0">
                        <input type="checkbox" name="wifi" value="1" >
                </div>

                <div class="form-group">  
                @csrf                      
                       <label for="aircorn">Air-Corn</label>
                       <input type="hidden" name="aircorn" value="0">
                        <input type="checkbox" name="aircorn" value="1" >
                </div>

                <div class="form-group">  
                @csrf                      
                       <label for="bathroom">Bathroom</label>
                       <input type="hidden" name="bathroom" value="0">
                        <input type="checkbox" name="bathroom" value="1" >
                </div>

                <div class="form-group">  
                @csrf                      
                       <label for="tv">TV</label>
                       <input type="hidden" name="tv" value="0">
                        <input type="checkbox" name="tv" value="1" >
                </div>

            </div>
                <div class="form-group">
                    <label for="user_password" class="col-md-4 control-label">description</label>
                    <textarea name="description" cols="30" rows="10"
                        class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{$rooms->description}}</textarea>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Price </label>
                    <input type="number" class="form-control" name="price" value="{{$rooms->price}}" />
                </div>
                <div class="form-group">
                    <label for="name">Bedcount </label>
                    <input type="number" class="form-control" name="bedcount" value="{{$rooms->bedcount}}" />
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
