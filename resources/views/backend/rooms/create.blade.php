@extends('backend/main')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }

</style>
<div class="card uper">
    <div class="card-header">
        Add Room
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
            <form method="post" action="{{ route('rooms.store') }}" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" name="room_number" />
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
                    <label for="user_password" class="col-md-4 control-label">description</label>
                    <textarea name="description" cols="30" rows="10"
                        class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}"></textarea>
                    @if ($errors->has('description'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="row">
                <div class="form-group">  
                @csrf                      
                       <label for="wifi">Wifi</label>
                       <input type="hidden" name="wifi" value="0">
                        <input type="checkbox" name="wifi" value="0" >
                </div>

                <div class="form-group">  
                @csrf                      
                       <label for="aircorn">Air-Corn</label>
                       <input type="hidden" name="aircorn" value="0">
                        <input type="checkbox" name="aircorn" value="0" >
                </div>

                <div class="form-group">  
                @csrf                      
                       <label for="bathroom">Bathroom</label>
                       <input type="hidden" name="bathroom" value="0">
                        <input type="checkbox" name="bathroom" value="0" >
                </div>

                <div class="form-group">  
                @csrf                      
                       <label for="tv">TV</label>
                       <input type="hidden" name="tv" value="0">
                        <input type="checkbox" name="tv" value="0" >
                </div>

            </div>

                <div class="form-group">                        
                        <label for="name">Price </label>
                        <input type="number" class="form-control" name="price" />
                </div>
                <div class="form-group">                        
                        <label for="name">Bedcount </label>
                        <input type="number" class="form-control" name="bedcount" />
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection
