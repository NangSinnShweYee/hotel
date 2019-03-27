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
              <td>Hall Name</td>
              <td>User Name</td>
              <td>Date</td>
              
              
              
            </tr>
        </thead>
      <tbody>
          <?php $i=1 ?>
            @foreach($hall_bookings as $hall_booking)
            <tr>
            <td>{{$i}}</td>
                <td>{{$hall_booking->room->name}}</td>
                <td>{{$hall_booking->user->name}}</td>
                <td>{{$hall_booking->date}}</td>
                               
                
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
    </div>
  <div>
@endsection