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
    <a href="{{route('dinings.create')}}" class="btn btn-success" >Create</a>
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
            @foreach( $dinings as $dining)
            <tr>
                <td>{{$i}}</td>
                <td>{{$dining->name}}</td>
                <td>{{$dining->price}}</td>
                <td><img src="{{$dining->photo}}" alt="" width="200px"></td>
                <td>{{$dining->capacity}}</td>
                <td>{{$dining->location}}</td>
                <td>{{$dining->description}}</td>
               
                
                <td><a href="{{ route('dinings.edit',$dining->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('dinings.destroy', $dining->id)}}" method="post">
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

