@extends('backend/main')
@section('content')
<style>
    .uper {
      margin-top: 40px;
    }
  </style>
  <div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    <div class="container">
    <a href="{{route('room_categories.create')}}" class="btn btn-success" >Create</a>
    <table class="table table-striped">
     
      <thead>
            <tr>
              <td>ID</td>
              <td>Room Category Name</td>
              
              <td colspan="2">Action</td>
            </tr>
        </thead>
      <tbody>
            @foreach($room_categories as $room_categories)
            <tr>
                <td>{{$room_categories->id}}</td>
                <td>{{$room_categories->name}}</td>
                
                <td><a href="{{ route('room_categories.edit',$room_categories->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('room_categories.destroy', $room_categories->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  <div>
@endsection