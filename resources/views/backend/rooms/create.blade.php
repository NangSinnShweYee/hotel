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
            <form method="post" action="{{ route('rooms.store') }}">
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

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
</div>
@endsection
