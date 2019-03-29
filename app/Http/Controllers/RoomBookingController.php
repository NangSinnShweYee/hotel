<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomBooking;
use VM\TimeOverlapCalculator\TimeOverlapCalculator;
use VM\TimeOverlapCalculator\Entity\TimeSlot;
use VM\TimeOverlapCalculator\Generator\TimeSlotGenerator;
use Carbon\Carbon;

class RoomBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['show']]);

    }
    public function index()
    {
        //
        $room_bookings = RoomBooking::all();
        return view('backend/room_bookings.index',compact('room_bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'check_in' => 'required|min:10',
            'check_out' => 'required',            
        ]);
        $check_indate = Carbon::parse( request('check_in'));
        $check_outdate = Carbon::parse( request('check_out'));

        
        $calculator = new TimeOverlapCalculator();  
        $baseTimeSlot = new TimeSlot(
            $check_indate,
            $check_outdate
        );

        $isOverlap = false;
        
        $bookings = RoomBooking::where('room_id','=', request('room_id'))->get();
        foreach ($bookings as $booking) {
            $testin = Carbon::parse( $booking->check_in);
            $testout = Carbon::parse( $booking->check_out);
            $overlappingTimeSlot = new TimeSlot(
                $testin,
                $testout
             );
             $isOverlap = $calculator->isOverlap($baseTimeSlot, $overlappingTimeSlot);
        }
        $string = 'The room is not available in that time period. You can book after '.$testout;

        if($isOverlap){
            return back()->with('overlap',$string);
            
        }
        else{
            // echo "not overlap";
            RoomBooking::create([
                "room_id" => request('room_id'),
                "user_id" => request('user_id'),
                "check_in" => request('check_in'),
                "check_out" => request('check_out'),   
    
            ]);
            return redirect('/')->with('success', 'Booking has been created');
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room_bookings = RoomBooking::find($id);
        $room_bookings->delete();
        return redirect('/history');
    }
}
