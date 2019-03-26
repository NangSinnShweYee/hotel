@extends('backend/main')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }

</style>
<div class="card uper">
    <div class="card-header">
        Add Dining
    </div>
   
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
            <form method="post" action="{{ route('dinings.update',$dinings->id) }}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                          <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$dinings->name}}" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="name">Price:</label>
                    <input type="text" class="form-control" name="price" value="{{$dinings->price}}" />
                </div>
                <div class="form-group">
                    <label for="user_email" class="col-md-4 control-label">Photo</label>
                    <input type="file" name="photo"
                        class="form-control-file {{ $errors->has('photo') ? ' is-invalid' : '' }}" />
                    @if ($errors->has('photo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                    @endif

                     <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active"  id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Old Image</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Image</a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active"  id="home" role="tabpanel" aria-labelledby="home-tab">
                    <img src="{{asset($dinings->photo)}}" class="img-fluid">
                    <input type="hidden" name="oldimage" value="{{$dinings->photo}}">
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>






                </div>
                  <div class="form-group">                        
                        <label for="name">Capacity </label>
                        <input type="number" class="form-control" name="capacity" value="{{$dinings->capacity}}" />
                </div>
                  <div class="form-group">
                          <label for="name">Location:</label>
                    <input type="text" class="form-control" name="location" value="{{$dinings->location}}" />
                </div>
                <div class="form-group">                        
                               <label for="user_password" class="col-md-4 control-label">description</label>
                    <textarea name="description" cols="30" rows="10"
                        class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{$dinings->description}}</textarea>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
