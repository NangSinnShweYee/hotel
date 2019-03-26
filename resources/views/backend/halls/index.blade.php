
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
    <a href="{{route('halls.create')}}" class="btn btn-success" >Create</a>
    <table class="table table-striped">
            <thead>
                    <tr>
                      <td>No.</td>
                      <td>Name</td>
                      <td>Price</td>
                      <td>Photo</td>
                      <td>Capacity</td>
                      <td>Location</td>
                      <td>Description</td>
                    
                      
                      <td colspan="2">Action</td>
                    </tr>
                </thead>      
      <tbody>
          <?php $i=1; ?>
            @foreach( $halls as $hall)
            <tr>
                <td>{{$i}}</td>
                <td>{{$hall->name}}</td>
                <td>{{$hall->price}}</td>
                <td><img src="{{$hall->photo}}" alt="" width="200px"></td>
                <td>{{$hall->capacity}}</td>
                <td>{{$hall->location}}</td>
                <td>{{$hall->description}}</td>
               
                
                <td><a href="{{ route('halls.edit',$hall->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('halls.destroy', $hall->id)}}" method="post">
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
