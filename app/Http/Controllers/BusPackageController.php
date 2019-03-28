<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusPackage;

class BusPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

   /*  public function __construct()
    {
        $this->middleware('auth');

    }*/

    public function index()
    {
        $buspackages=BusPackage::all();
        return view('backend/bus_packages.index',compact('buspackages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend/bus_packages.create');
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

        BusPackage::create([
            "name"=>request('name'),
            "price"=>request('price'),
            "photo"=>$photo,
            "depature_time"=>request('depature_time'),
            "arrival_time"=>request('arrival_time'),
            "places"=>request('places'),
            "description"=>request('description'),
            "guide"=>request('guide'),
        ]);
        return redirect('/bus_packages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $bus_packages = BusPackage::find($id);
        return view('frontend/busdetail',compact('bus_packages'));
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
