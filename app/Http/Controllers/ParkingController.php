<?php

namespace App\Http\Controllers;
use App\Models\Parking;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function index()
    {

        $parkings = Parking::all();
        return view("Admin.parkings.index",['parkings'=>$parkings]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nomparking' => 'required|unique:parkings',
            'adresse' => 'required',
            'nbrplaces' => 'numeric',
            
        ]);

        Parking::create($request->all());

        return redirect()->route('parkings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Parking $parking)
    {
        //$parking = Parking::find($parking);
         
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Parking $parking)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Parking $parking)
    {

        $request->validate([
            'nomparking' => 'required',
            'adresse' => 'required',
            'nbrplaces' => 'numeric',
            
        ]);
      
       
        $parking->update($request->all());
        return redirect()->route('parkings.index')->with('succes', 'parking updeated seccefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parking $parking)
    {
        $parking->delete();
        return redirect()->route('parkings.index')->with('success', 'parking deleted successfully');
    }



}
