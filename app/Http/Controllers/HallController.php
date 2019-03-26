<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hall;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $halls = Hall::all();
        return view('backend/halls.index',compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/halls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            if($request->hasfile('photo')){
            $photo=$request->file('photo');
            $name=$photo->getClientOriginalName();
            $photo->move(public_path().'/storage/image/',$name
        );
            $photo='storage/image/'.$name;
        }else{
            $photo=request('oldimage');
        }

         Hall::create([
           
            "name" => request('name'),
            "price"=>request('price'),
            "photo" => $photo,
            "capacity" => request('capacity'),
            "location" => request('location'),
            "description" => request('description'),
           
            

        ]);
        return redirect('/halls');
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
