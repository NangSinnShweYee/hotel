<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomBooking;
use App\DiningBooking;
use App\HallBooking;
use App\BusBooking;


class BookingController extends Controller
{
    //
    public function room()
    {
        //
        $room_bookings = RoomBooking::all();
        return view('backend/room_bookings.index',compact('room_bookings'));
    }
    public function dining()
    {
        //
        $dining_bookings = DiningBooking::all();
        return view('backend/dining_bookings.index',compact('dining_bookings'));
    }
    public function hall()
    {
        //
        $hall_bookings = HallBooking::all();
        return view('backend/hall_bookings.index',compact('hall_bookings'));
    }
    public function bus()
    {
        //
        $bus_bookings = BusBooking::all();
        return view('backend/bus_bookings.index',compact('bus_bookings'));
        
    }
}
