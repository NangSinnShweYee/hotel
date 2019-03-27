<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HallBooking;


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
            'stat_time' => 'required|min:10',
            'end_time' => 'required',            
        ]);
       
            // echo "not overlap";
            HallBooking::create([
                "hall_id" => request('hall_id'),
                "user_id" => request('user_id'),
                "start_time" => request('start_time'),
                "end_time" => request('end_time'),   
    
            ]);
            return redirect('/')->with('success', 'Booking has been created');
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
