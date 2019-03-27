<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomCategory;
use App\Hall;
use App\RoomBooking;
use App\Dining;
use App\BusPackage;
use DB;



class MainController extends Controller
{
    //
    public function index(){

    }
    public function room()
    {
        $rooms = Room::paginate(6);

        if($category_id = request('category_id')){
            $rooms = Room::where ('category_id',$category_id)->get();
        }
        $categories = RoomCategory::all();            
    
        return view('frontend/room',compact('categories','rooms'));
    }

    public function hall()
    {
        $halls = Hall::paginate(4);

        $halls = Hall::all();            
    
        return view('frontend/hall',compact('halls'));
    }
   public function dining()
    {
        $dinings = Dining::paginate(4);

        $dinings = Dining::all();            
    
        return view('frontend/dining',compact('dinings'));
    } 
    public function bus()
    {
        $bus_packages = BusPackage::paginate(4);

        $bus_packages = BusPackage::all();            
    
        return view('frontend/bus',compact('bus_packages'));
    } 
    public function history()
    {
                    
     $bookings = RoomBooking::where ('user_id',$user_id)->get();
        return view('frontend/history',compact('bookings'));
    }
    public function report(){
        $room_categories = RoomCategory::all();
        $bus_packages = BusPackage::all();
        $halls= Hall::all();
        $hall_array = array();
        $bus_array = array();        
        $array = array();
        $roomsall = Room::all();
        $money = 0;
        $room_bookings = RoomBooking::all();

        foreach ($room_categories as $cat) {
            # code...
            $counts = DB::table('room_bookings')
        ->join('rooms', 'rooms.id', '=', 'room_bookings.room_id')
        ->join('room_categories', 'room_categories.id', '=', 'rooms.category_id')
        ->where('room_categories.id', '=', $cat->id)
        ->count();
            
            array_push($array,$counts);
        }
        foreach ($bus_packages as $cat) {
            # code...
            $counts = DB::table('hall_bookings')
        ->join('rooms', 'rooms.id', '=', 'room_bookings.room_id')
        ->join('room_categories', 'room_categories.id', '=', 'rooms.category_id')
        ->where('room_categories.id', '=', $cat->id)
        ->count();
            
            array_push($array,$counts);
        }
        
        foreach ($room_bookings as $room_booking) {            
            $money += $room_booking->room->price;            
        }

        echo $money;
        return view('backend/reports.index',compact('room_categories','array'));
    }
}
