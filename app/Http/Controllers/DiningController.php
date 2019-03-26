<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dining;

class DiningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinings=Dining::all();
        return view('backend/dinings.index',compact('dinings'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/dinings.create');
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

         Dining::create([
           
            "name" => request('name'),
            "price"=>request('price'),
            "photo" => $photo,
            "capacity" => request('capacity'),
            "location" => request('location'),
            "description" => request('description'),
           
            

        ]);
        return redirect('/dinings');
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
          $dinings = Dining::find($id);
        return view('backend/dinings.edit',compact('dinings'));
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
          if($request->hasfile('photo')){
            $photo=$request->file('photo');
            $name=$photo->getClientOriginalName();
            $photo->move(public_path().'/storage/image/',$name
        );
            $photo='storage/image/'.$name;
        }else{
            $photo=request('oldimage');
        }
        $dinings = Dining::find($id);

        $dinings->name=request('name');
        $dinings->price=request('price');
        $dinings->photo=$photo;
        $dinings->capacity=request('capacity');
        $dinings->location=request('location');
        $dinings->description=request('description');

        $dinings->save();
        return redirect('/dinings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $dinings = Dining::find($id);
        $dinings->delete();
        return redirect('/dinings');
    }
}
