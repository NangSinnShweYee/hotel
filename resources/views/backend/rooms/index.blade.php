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
    <a href="{{route('rooms.create')}}" class="btn btn-success" >Create</a>
    <table class="table table-striped">
            <thead>
                    <tr>
                      <td>No.</td>
                      <td>Room Number</td>
                      <td>Photo</td>
                      <td>Description</td>
                      <td>Price</td>
                      <td>Availability</td>
                      <td>Bedcount</td>
                      <td>Category</td>
                      
                      <td colspan="2">Action</td>
                    </tr>
                </thead>      
      <tbody>
          <?php $i=1; ?>
            @foreach($rooms as $room)
            <tr>
                <td>{{$i}}</td>
                <td>{{$room->room_number}}</td>
                <td><img src="{{$room->photo}}" alt="" width="200px"></td>
                <td>{{$room->description}}</td>
                <td>{{$room->price}}</td>
                <td>{{$room->Availability}}</td>
                <td>{{$room->bedcount}}</td>
                <td>{{$room->room_categories->name}}</td>
                
                <td><a href="{{ route('rooms.edit',$room->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('rooms.destroy', $room->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
    </div>
  <div>
@endsection