<?php

namespace App\Http\Controllers;

use App\partner;
use App\Hospital;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('be_partner');
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
            'name' => 'required',
            'provider_id' => 'required',

        ]);
        $hospital = new Hospital();
        $date = date('Y-m-d');
        $hospital->name = $request->name;
        $hospital->contract_date = $date;
        $date_s = Carbon::createFromFormat('Y-m-d', $date);
        $date_new = $date_s->addYear(1)->toDateString();
        $hospital->expiry_date = $date_new;
        $hospital->contact1 = $request->contact;
        $hospital->email = $request->email;
        $hospital->provider_type = $request->provider_id;
        $hospital->card_type = 1;
        $hospital->authorized = $request->authorized;
        $hospital->status = 0;
        $hospital->on_off = 0;
        $hospital->online = 2;
        $hospital->save();

        session()->flash('add', 'سوف يتم التواصل معكم');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(partner $partner)
    {
        return view('partner.partner');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        partner::destroy($request->id_inp);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();
    }
}
