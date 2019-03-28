@extends('backend/main')
@section('content')
<div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Popular room type report
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Room type name</th>
                            <th>Number of time booked</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                       $i = 0 
                    @endphp
                        @foreach ($room_categories as $category)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$category->name}}</td>
                            <td>{{$array[$i]}}</td>
                         </tr>
                         @php
                             $i++;
                         @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Daily Income ({{ \Carbon\Carbon::today()->toFormattedDateString() }})
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              <table class="table" id="myTable">
                <thead>
                  <tr>
                    {{-- <th>Room</th> --}}
                    <th class="text-center">Room No</th>
                    <th class="text-center">Booked Days</th>
                    <th class="text-right">Price</th>
                  </tr>
                </thead>
                @php
                    $daily_total = 0;
                @endphp
                @foreach($dailyincomes as $di)
                <tr>
                  {{-- <td>{{ $di['room_desc'] }}</td> --}}
                  <td class="text-center">{{ $di['room_number'] }}</td>
                  <td class="text-center">{{ $di['booked_days'] }}</td>
                  <td class="text-right">{{ $di['total_cost'] }}</td>
                  @php
                      $daily_total += $di['total_cost'];
                  @endphp
                </tr>
                @endforeach
                <tfoot>
                  <tr>
                    <td colspan="2" class="font-weight-bold">Total Income for {{ \Carbon\Carbon::today()->toFormattedDateString() }}</td>
                    <td class="text-right font-weight-bold">{{ $daily_total }}</td>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
        
      </div>
@endsection
