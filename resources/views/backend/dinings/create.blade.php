@extends('backend/main')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }

</style>
<div class="card uper">
    <div class="card-header">
        Add Hall
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
            <form method="post" action="{{ route('dinings.store') }}" enctype="multipart/form-data">
                <div class="form-group">
                          <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="form-group">
                    @csrf
                    <label for="name">Price:</label>
                    <input type="text" class="form-control" name="price" />
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
                        <label for="name">No of people </label>
                        <input type="number" class="form-control" name="capacity" />
                </div>
                  <div class="form-group">
                          <label for="name">Location:</label>
                    <input type="text" class="form-control" name="location" />
                </div>
                <div class="form-group">                        
                               <label for="user_password" class="col-md-4 control-label">description</label>
                    <textarea name="description" cols="30" rows="10"
                        class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection
