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
              <td>Room id</td>
              <td>User id</td>
              <td>Check in date</td>
              <td>Check out date</td>
              
              
            </tr>
        </thead>
      <tbody>
          <?php $i=1 ?>
            @foreach($room_bookings as $room_booking)
            <tr>
            <td>{{$i}}</td>
                <td>{{$room_booking->room_id}}</td>
                <td>{{$room_booking->user_id}}</td>
                <td>{{$room_booking->check_in}}</td>
                <td>{{$room_booking->check_out}}</td>               
                
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
    </div>
  <div>
@endsection