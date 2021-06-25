<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Stationnement;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatvoitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$park = Parking::find('parking_id');
            
        $park = Auth::user()->parking()->first();
     $places = $park->places()->get();
    //$stats = $places->stationnements()->get();
   // $voiture = $places->stationnements()->voiture()->get();

      return view('Admin.agtaches.stationnementscourants',compact('places'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
    public function search()
    {

        $q = request()->input('q');
      
       $voiture = Voiture::where('matricule','LIKE',"%$q%")
                         ->first();
                       //  dd($voiture);


        $stats = $voiture->stationnements()->first();
        $places = $stats->place()->get();
         return view('Admin.agtaches.searchlist')->with('places', $places);
    }
}
