<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Parking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class parkagentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parks = Parking::all();
        return view('Admin.parkings.agents',compact('parks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
            $parks = Parking::all();
            return view('Admin.parkings.agents', compact('parks'));
        }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());

        $data = $request->validate([
            'nomagent' => ['string', 'required'],
            'tele' => ['string', 'required'],
            'recrutement' => ['date','required'],
            'cin' => ['string', 'required'],
            'email' => ['email', 'required'],
            'password' => ['string', 'required'],
            'nomparking' => ['string','required'],
        ]);
      

        $user = new User();
        $user->name = $data['nomagent'];
        $user->tele = $data['tele'];
        $user->recrutement = $data['recrutement'];
        $user->cin = $data['cin'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']) ;
       $parking = Parking::where(['nomparking'=>$data['nomparking']])->firstOrFail();

        $parking->users()->save($user);
       
        return redirect()->route('agents.index');
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
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'string',
            'tele' => 'string',
            'recrutement' => 'date',
            'cin' => 'string',
            'email' => 'email',
            'password' => 'string',

        ]);
      
       
        $user->update($request->all());
        return redirect()->route('agents.index')->with('succes', 'parking updeated seccefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        $user = User::destroy($id);

        //$user->delete();
        return redirect()->route('agents.index')->with('success', 'parking deleted successfully');
    }
}
