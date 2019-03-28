@extends('backend/main')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }

</style>
<div class="card uper">
    <div class="card-header">
        Add Bus_packages
    </div>
    {{$bus_packages}}
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
            <form method="post" action="{{ route('bus_packages.update',$bus_packages->id) }}" enctype="multipart/form-data">

                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                          <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$bus_packages->name}}" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="name">Price:</label>
                    <input type="text" class="form-control" name="price" value="{{$bus_packages->price}}" />
                </div>
                
                <div class="form-group">
                    
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
                    <img src="{{asset($bus_packages->photo)}}" class="img-fluid">
                    <input type="hidden" name="oldimage" value="{{$bus_packages->photo}}">
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <label for="photo" class="col-md-4 control-label">New Photo</label>
                        <input type="file" name="photo"
                            class="form-control-file {{ $errors->has('photo') ? ' is-invalid' : '' }}" />
                        @if ($errors->has('photo'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('photo') }}</strong>
                        </span>
                        @endif
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    
                </div>






                </div>
              </div>
                  <div class="form-group">
              @csrf
              <label for="name">Depature Time:</label>
              <input type="time" class="form-control" 
              name="depature_time" value="{{$bus_packages->depature_time}}"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Arrival Time:</label>
              <input type="time" class="form-control" name="arrival_time" value="{{$bus_packages->arrival_time}}"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Places:</label>
              <input type="text" class="form-control" name="places" value="{{$bus_packages->places}}"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Description:</label>
              <input type="text" class="form-control" name="description" value="{{$bus_packages->description}}"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="check" >Guide:</label>
              <input type="hidden" name="guide" value="0">
              <input type="checkbox"  name="guide" value="1">
          </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
