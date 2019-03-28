@extends('frontend/master')
@section('content')
<section class="pricing py-5">
	<div class="container">
		<h1>Room Booking</h1>
		@if(!empty( $roombookings)) 

		<table class="table table-striped">

			<thead>
				<tr>
					<td>No</td>
					<td>Room Number</td>
					<td>Check in date</td>
					<td>Check out date</td> 
					<td>Delete</td> 
				</tr>
			</thead>
			<tbody>
				
				<?php $i=1 ?>
				@foreach($roombookings as $roombooking)
				<tr>
					<td>{{$i}}</td>
					<td>{{$roombooking->room_id}}</td>

					<td>{{$roombooking->check_in}}</td>
					<td>{{$roombooking->check_out}}</td>               
					<td> <form action="{{ route('room_bookings.destroy',$roombooking->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form></td>
				</tr>
				<?php $i++; ?>
				@endforeach
			</tbody>
		</table>
		@else <h2>Non</h2>
		@endif

		<h1>Hall Booking</h1>
		
		<table class="table table-striped">
			
			<thead>
				<tr>
					<td>No</td>
					<td>Hall Number</td>
					<td>Start Time</td>
					<td>End time</td> 
					<td>Delete</td> 
				</tr>
			</thead>
			<tbody>
				
				<?php $i=1 ?>


				
				@foreach($hallbookings as $hallbooking)
				<tr>
					<td>{{$i}}</td>
					<td>{{$hallbooking->user_id}}</td>
					
					<td>{{$hallbooking->start_time}}</td>
					<td>{{$hallbooking->end_time}}</td>               
					<td> <form action="{{ route('hall_bookings.destroy',$hallbooking->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form></td>
				</tr>
				<?php $i++; ?>
				@endforeach

			</tbody>
		</table>

		
		<h1>Bus Booking</h1>
		<table class="table table-striped">
			
			<thead>
				<tr>
					<td>No</td>
					<td>Bus Number</td>
					<td>Date</td>

					<td>Delete</td> 
				</tr>
			</thead>
			<tbody>
				<?php $i=1 ?>
				@foreach($busbookings as $busbooking)
				@if(!empty( $hallbookings))
				<tr>
					<td>{{$i}}</td>
					<td>{{$busbooking->bus_id}}</td>
					
					<td>{{$busbooking->date}}</td>               
					<td> <form action="{{ route('bus_bookings.destroy',$busbooking->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form></td>
				</tr>
				@else <tr><td colspan="2">Non</td></tr>
				@endif
				<?php $i++; ?>
				@endforeach
			</tbody>
		</table>
		<h1>Dining Booking</h1>
		<table class="table table-striped">
			
			<thead>
				<tr>
					<td>No</td>
					<td>Dining Number</td>
					<td>Date</td> 
					<td>Delete</td> 
				</tr>
			</thead>
			<tbody>
				<?php $i=1 ?>
				@foreach($diningbookings as $diningbooking)
				<tr>
					<td>{{$i}}</td>
					<td>{{$diningbooking->user_id}}</td>
					
					
					<td>{{$diningbooking->date}}</td>               
					<td> <form action="{{ route('dining_bookings.destroy',$diningbooking->id)}}" method="post">
						@csrf
						@method('DELETE')
						<button class="btn btn-danger" type="submit">Delete</button>
					</form></td>
				</tr>
				<?php $i++; ?>
				@endforeach
			</tbody>
		</table>


	</section>
	@endsection