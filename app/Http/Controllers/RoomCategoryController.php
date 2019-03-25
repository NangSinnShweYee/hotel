<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RoomCategory;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  
        $roomcategories = RoomCategory::all();

        

        return view('backend/room_categories.index', compact('roomcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend/room_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RoomCategory::create([
           'name'=>request('roomcategory_name')
        ]);

       $roomcategories = RoomCategory::all();

        

        return view('backend/room_categories.index', compact('roomcategories'));
            
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
        $room_categories = RoomCategory::find($id);
        return view('backend.room_categories.edit',compact('room_categories'));
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
        /*dd($request);*/
        //$room_categories = RoomCategory::all();
        $room_category=RoomCategory::find($id);
        $room_category->name=request('roomcategory_name');
        $room_category->save();
        return redirect('/room_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room_category=RoomCategory::find($id);
        foreach ($room_category->rooms as $room) {
            $room->delete();
        }
        $room_category->delete();
        return redirect('/room_categories');
    }
}
