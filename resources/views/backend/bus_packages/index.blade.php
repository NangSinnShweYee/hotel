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
    <a href="{{route('bus_packages.create')}}" class="btn btn-success" >Create</a>
    <table class="table table-striped">
            <thead>
                    <tr>
                      <td>No.</td>
                      <td>Name</td>
                      <td>Price</td>
                      <td>Photo</td>
                      <td>Depature_Time</td>
                      <td>Arrival_Time</td>
                      <td>Places</td>
                      <td>Description</td>
                      <td>Guide</td>
                    
                      
                      <td colspan="2">Action</td>
                    </tr>
                </thead>      
      <tbody>
          <?php $i=1; ?>
            @foreach( $buspackages as $bus)
            <tr>
                <td>{{$i}}</td>
                <td>{{$bus->name}}</td>
                <td>{{$bus->price}}</td>
                <td><img src="{{$bus->photo}}" alt="" width="200px"></td>
                <td>{{$bus->depature_time}}</td>
                <td>{{$bus->arrival_time}}</td>
                <td>{{$bus->places}}</td>
                <td>{{$bus->description}}</td>
                <td>{{$bus->guide}}</td>

               
                
                <td><a href="{{ route('bus_packages.edit',$bus->id)}}" class="btn btn-primary">Edit</a></td>
                <td>
                    <form action="{{ route('bus_packages.destroy', $bus->id)}}" method="post">
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

