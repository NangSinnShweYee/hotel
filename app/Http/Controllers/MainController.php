<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomCategory;
use App\Hall;
use App\RoomBooking;

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
    public function history()
    {
                    
    
        return view('frontend/history');
    }
    public function report(){
        // $room_categories = RoomCategory::all();
        // foreach ($room_categories as $room_category) {
        //     # code...
        //     $count = App\RoomBooking::where('room_id', 2)->count();
        // }
        $count = RoomBooking::where('room_id', 2)->count();
        echo $count;
        // dd($count);
        // return view ('backend/reports.index',compact('room_categories'));
    }
}
