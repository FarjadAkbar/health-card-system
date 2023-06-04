<?php

namespace App\Http\Controllers;

use App\hospital_contact;
use Illuminate\Http\Request;
use function Complex\add;

class HospitalContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
           'name'=> 'required',
        
        ]);
        hospital_contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'job' => $request->input('job'),
            'hospital_id' => $request->input('id_inp'),

        ]);

        session()->flash('add', 'Data has been Added successfully');
        return back();    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hospital_contact  $hospital_contact
     * @return \Illuminate\Http\Response
     */
    public function show(hospital_contact $hospital_contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hospital_contact  $hospital_contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hospital_contact  $hospital_contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hospital_contact $hospital_contact)
    {
$request->validate([
           'name'=> 'required',
           
        ]);
        $hospital_contact = hospital_contact::find($request->id_inp);
        $hospital_contact->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'job' => $request->input('job'),

        ]);

        session()->flash('add', 'Data has been Updated successfully');
        return back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hospital_contact  $hospital_contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id_inp;
        hospital_contact::where('id',$id)->delete();
        session()->flash('add', 'Data has been deleted successfully');
        return back();
    }
}
