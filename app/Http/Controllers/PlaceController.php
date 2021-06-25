<?php

namespace App\Http\Controllers;

use App\Models\Parking;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlaceController extends Controller
{
    public function index()
    {
       //$park = Parking::find('parking_id');
            
         $park = Auth::user()->parking()->first();

         $places=$park->places()->get();
        return view('Admin.places.index1',compact('park','places'));

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
        $data = $request->validate([
            'codeplace' =>['string','required'],
            'etat' => ['numeric','required'],
          'nomparking' => ['string','required'],
        ]);
      

        $place = new Place();
        $place->codeplace = $data['codeplace'];
        $place->etat = $data['etat'];
         //   $parking = Auth::user()->parking()->first();

      $parking = Parking::where(['nomparking'=>$data['nomparking']])->firstOrFail();

        $parking->places()->save($place);
       
        return redirect()->route('places.index');
    }

    public function show(Place $place)
    {
        //$place = Agent::find($place);
         
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Place $place)
    {

      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $place = Place::destroy($id);
       
       // $place->delete();
        return redirect()->route('places.index')->with('success', 'place deleted successfully');
    }
}
