<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomCategory;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    public function index()
    {
        //
        $rooms = Room::all();
        return view('backend/rooms.index',compact('rooms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = RoomCategory::all();
        return view('backend/rooms.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|min:3',
            'photo.*' => 'mimes:jpeg,jpg,png',
                       
        ]);
        //
        //Upload files
        if($request->hasFile('photo')){
            foreach ($request->file('photo') as $photo) {
                # code...
                $name = $photo->getClientOriginalName();
                $photo->move(public_path().'/storage/image/',$name);
                $photodata[] = '/storage/image/'.$name;
            }
            
            
        }
        Room::create([
            "category_id" => request('category_id'),
            "room_number" => request('room_number'),
            "photo" => json_encode($photodata),
            "description" => request('description'),
            "wifi" => request('wifi'),
            "aircorn" => request('aircorn'),
            "bathroom" => request('bathroom'),
            "tv" =>request('tv'),
            "price" => request('price'),
            "bedcount" => request('bedcount'),
           
            

        ]);
        return redirect('/rooms');
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
        $rooms = Room::find($id);
        return view('frontend/roomdetail',compact('rooms'));
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
        $rooms = Room::find($id);
         $categories = RoomCategory::all();
        return view('backend/rooms.edit',compact('rooms','categories'));
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
        $request->validate([            
            'photo.*' => 'mimes:jpeg,jpg,png',                       
        ]);

        if($request->hasfile('photo')){
            foreach ($request->file('photo') as $photo) {
                # code...
                $name = $photo->getClientOriginalName();
                $photo->move(public_path().'/storage/image/',$name);
                $photodata[] = '/storage/image/'.$name;
            }            
           $photoinput = json_encode($photodata);
        }else{
            $photoinput=request('oldimage');
        }
                
        $rooms=Room::find($id);
        $rooms->room_number=request('room_number');
        $rooms->description=request('description');
        $rooms->price=request('price');
        $rooms->wifi=request('wifi');
        $rooms->bathroom=request('bathroom');
        $rooms->aircorn=request('aircorn');
        $rooms->tv=request('tv');
        $rooms->photo = $photoinput;
              $rooms->bedcount=request('bedcount');
              $rooms->save();
              return redirect('/rooms');
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
        $rooms=Room::find($id);
        $rooms->delete();
        return redirect('/rooms');
    }
}
