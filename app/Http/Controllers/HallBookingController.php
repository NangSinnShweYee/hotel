<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HallBooking;
use VM\TimeOverlapCalculator\TimeOverlapCalculator;
use VM\TimeOverlapCalculator\Entity\TimeSlot;
use VM\TimeOverlapCalculator\Generator\TimeSlotGenerator;
use Carbon\Carbon;

class HallBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hall_bookings = HallBooking::all();
        return view('backend/hall_bookings.index',compact('hall_bookings'));
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
        
        $bookings = HallBooking::where('hall_id','=', request('hall_id'))->get();
        foreach ($bookings as $booking) {
            $testin = Carbon::parse( $booking->start_time);
            $testout = Carbon::parse( $booking->end_time);
            $overlappingTimeSlot = new TimeSlot(
                $testin,
                $testout
             );
             $isOverlap = $calculator->isOverlap($baseTimeSlot, $overlappingTimeSlot);
        }
        

        if($isOverlap){
            return back()->with('overlap','The room is not available in that time period.');
            
        }
        else{
            // echo "not overlap";
            HallBooking::create([
                "hall_id" => request('hall_id'),
                "user_id" => request('user_id'),
                "start_time" => request('check_in'),
                "end_time" => request('check_out'),   
    
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
        //
    }
}
