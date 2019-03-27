<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomCategory;
use App\Hall;
use App\RoomBooking;
use App\Dining;
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
    public function history()
    {
                    
     $bookings = Room::where ('user_id',$user_id)->get();
        return view('frontend/history',compact('bookings'));
    }
    public function report(){
        $room_categories = RoomCategory::all();        
        $array = array();
        

        foreach ($room_categories as $cat) {
            # code...
            $counts = DB::table('room_bookings')
        ->join('rooms', 'rooms.id', '=', 'room_bookings.room_id')
        ->join('room_categories', 'room_categories.id', '=', 'rooms.category_id')
        ->where('room_categories.id', '=', $cat->id)
        ->count();
            
            array_push($array,$counts);
        }
        // dd($array);
        
        return view('backend/reports.index',compact('room_categories','array'));
    }
}
