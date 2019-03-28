<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusBooking;
class BusBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bus_bookings = BusBooking::all();
        return view('backend/bus_bookings.index',compact('bus_bookings'));
        
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
        $bookings = BusBooking::where('bus_id','=', request('bus_id'))->get();      
            BusBooking::create([
                "bus_id" => request('bus_id'),
                "user_id" => request('user_id'),
                "date" => request('date'),
                
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
        $bus_bookings =BusBooking::find($id);
        $bus_bookings->delete();
        return redirect('/history');
    }
}
