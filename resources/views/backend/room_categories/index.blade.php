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
            @foreach($roomcategories as $room_category)
            <tr>
                <td>{{$room_category->id}}</td>
                <td>{{$room_category->name}}</td>
                
                <td><a href="{{ route('room_categories.edit',$room_category->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('room_categories.destroy', $room_category->id)}}" method="post">
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