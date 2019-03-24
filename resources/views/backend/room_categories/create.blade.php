@extends('backend/main')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Room Category
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
      <form method="post" action="{{ route('room_categories.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Room Category Name:</label>
              <input type="text" class="form-control" name="roomcategory_name"/>
          </div>
          
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
  </div>
</div>
@endsection