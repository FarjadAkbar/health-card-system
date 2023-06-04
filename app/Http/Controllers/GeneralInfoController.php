<?php

namespace App\Http\Controllers;

use App\GeneralInfo;
use Illuminate\Http\Request;

class GeneralInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $general_info = GeneralInfo::first();
        return view('category.company_info', compact('general_info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GeneralInfo  $generalInfo
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
               
        $request->validate([
            'company_name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'website' => 'required',
            'address_1' => 'required',
            'timing' => 'required',
            'closing' => 'required'
        ]);
        
        
        $general_info = GeneralInfo::find(1);
        $general_info->company_name = $request->company_name;
        $general_info->mobile = $request->mobile;
        $general_info->email = $request->email;
        $general_info->phone = $request->phone;
        $general_info->website = $request->website;
        $general_info->address_1 = $request->address_1;
        $general_info->address_2 = $request->address_2;
        $general_info->timing = $request->timing;
        $general_info->closing = $request->closing;

        $general_info->whatsapp = $request->whatsapp;
        $general_info->instagram = $request->instagram;

        if (!($request->company_logo == null)) {
            $image = $request->company_logo;
            $file_name = $image->getClientOriginalName();

            $general_info->logo = $file_name;

            // move
            $imageName = $request->company_logo->getClientOriginalName();
            $request->company_logo->move(public_path('company/'), $imageName);
        }
        $general_info->save();

        
        session()->flash('Add', 'تم اضافة المرفق بنجاح');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GeneralInfo  $generalInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralInfo $generalInfo)
    {
        //
    }
}
