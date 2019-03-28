@extends('backend/main')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Bus Packages
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
      <form method="post" action="{{ route('bus_packages.store') }}" enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              <label for="name">Bus Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          
          <div class="form-group">
              @csrf
              <label for="name">Price:</label>
              <input type="text" class="form-control" name="price"/>
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
                </div>

          <div class="form-group">
              @csrf
              <label for="name">Depature Time:</label>
              <input type="time" class="form-control" 
              name="depature_time"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Arrival Time:</label>
              <input type="time" class="form-control" name="arrival_time"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Places:</label>
              <input type="text" class="form-control" name="places"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="name">Description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>

          <div class="form-group">
              @csrf
              <label for="check" >Guide:</label>
              <input type="hidden" name="guide" value="0">
              <input type="checkbox"  name="guide" value="1">
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
  </div>
</div>
@endsection