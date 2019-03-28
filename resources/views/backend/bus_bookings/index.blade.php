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
    <table class="table table-striped">
     
      <thead>
            <tr>
              <td>No</td>
              <td>Package Name</td>
              <td>User Name</td>
              <td>Date</td>        
            </tr>
        </thead>
      <tbody>
          <?php $i=1 ?>
            @foreach($bus_bookings as $bus_booking)
            <tr>
            <td>{{$i}}</td>
                <td>{{$bus_booking->bus_package->name}}</td>
                <td>{{$bus_booking->user->name}}</td>
                <td>{{$bus_booking->date}}</td>
                               
                
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
    </div>
  <div>
@endsection