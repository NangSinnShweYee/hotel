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
            'photo' => 'required|',
                       
        ]);
        //
        //Upload files
        // if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $name = $photo->getClientOriginalName();
            $photo->move(public_path().'/storage/image/',$name);
            $photo = '/storage/image/'.$name;
        // }
        Room::create([
            "category_id" => request('category_id'),
            "room_number" => request('room_number'),
            "photo" => $photo,
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
