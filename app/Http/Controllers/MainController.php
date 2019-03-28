<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\RoomCategory;
use App\Hall;
use App\RoomBooking;
use App\HallBooking;
use App\DiningBooking;
use App\BusBooking;
use App\Dining;
use App\BusPackage;
use DB;
use Auth;



class MainController extends Controller
{
    //
    public function index(){

    }
    public function room()
    {
        $rooms = Room::paginate(6);

        if($category_id = request('category_id')){
            $rooms = Room::where ('category_id',$category_id)->paginate(6);
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

            // dd($category_id);
        $user_id=Auth::id();
        $roombookings = RoomBooking::where('user_id',$user_id)->get();
        $hallbookings = HallBooking::where('user_id',$user_id)->get();
        $busbookings = BusBooking::where('user_id',$user_id)->get();
        $diningbookings = DiningBooking::where('user_id',$user_id)->get(); 
        return view('frontend/history',compact('roombookings','hallbookings','diningbookings','busbookings'));
    }
    public function report(){
        $today = \Carbon\Carbon::today();
        $room_categories = RoomCategory::all();
        $bus_packages = BusPackage::all();
        $halls= Hall::all();
        $hall_array = array();
        $bus_array = array();        
        $array = array();
        $roomsall = Room::all();
        $money = 0;
        $room_bookings = RoomBooking::all();
        $dailybookings = RoomBooking::whereDate('created_at', $today)->get();

        foreach ($room_categories as $cat) {
            # code...
            $counts = DB::table('room_bookings')
            ->join('rooms', 'rooms.id', '=', 'room_bookings.room_id')
            ->join('room_categories', 'room_categories.id', '=', 'rooms.category_id')
            ->where('room_categories.id', '=', $cat->id)
            ->count();
            
            array_push($array,$counts);
        }
        // foreach ($bus_packages as $cat) {
        //     # code...
        //     $counts = DB::table('hall_bookings')
        // ->join('rooms', 'rooms.id', '=', 'room_bookings.room_id')
        // ->join('room_categories', 'room_categories.id', '=', 'rooms.category_id')
        // ->where('room_categories.id', '=', $cat->id)
        // ->count();
            
        //     array_push($array,$counts);
        // }
        
        foreach ($room_bookings as $room_booking) {            
            $money += $room_booking->room->price;            
        }
        $dailyincomes = array();

        foreach ($dailybookings as $dailybooking) {
            $check_out = \Carbon\Carbon::parse($dailybooking->check_out);
            $dailyincomes[] = [
                'room_desc' => $dailybooking->room->description,
                'room_number' => $dailybooking->room->room_number,
                'user_id' => $dailybooking->user_id,
                'booked_days' => $check_out->diffInDays($dailybooking->check_in),
                'total_cost' => $dailybooking->room->price * $check_out->diffInDays($dailybooking->check_in)
            ];
            $money += $dailybooking->room->price * $check_out->diffInDays($dailybooking->check_in);
        }
        // echo $money;
        return view('backend/reports.index',compact('room_categories','array', 'dailyincomes', 'money'));
    }
}
