<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Category;
use App\Contract;
use App\File_doctor;
use App\Hospital;
use Carbon\Carbon;
use App\Imports\HospitalImport;
use App\Imports\ServiceImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $hospitals = Hospital::where('provider_type',$id)->get();
        $category = Category::all();
        $category1 = Category::all();
        return view('hospital.hospital', compact('hospitals','category','category1'));
    }


  
    public function index_profile($id)
    {
        $hospital_id = $id;
        $hospital = Hospital::where('id', $id)->first();
        $attachment = Attachment::where('hospital_id', $hospital_id)->get()->all();
        $attachment_logo = Attachment::where('hospital_id', $hospital_id)->where('slider',null)->first();
        $contract = Contract::where('hospital_id', $hospital_id)->first();
        $list = File_doctor::where('id_hospital', $hospital_id)->first();
        $services = Service::where('hospital_id', $id)->get()->all();
        return view('hospital.profile', compact('hospital', 'attachment', 'contract', 'list', 'services','attachment_logo'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $request->validate([
            'provider_name' => 'required',
            'logo' => 'mimes:jpeg,png,jpg'
        ], [
            'provider_name.required' => 'Enter Name Please',
            'logo.mimes' => 'Attachment format to be jpeg, png, jpg'
        ]);
        $hospital = new Hospital();

        $hospital->name = $request->provider_name;
        $hospital->name_ar = $request->provider_name_ar;
        $hospital->contract_date = $request->contract_date;
        $hospital->cr_no = $request->cr_no;
        $hospital->place = $request->place;
        $hospital->place_ar = $request->place_ar;
        $hospital->contact1 = $request->contact;
        $hospital->contact2 = $request->contact2;
        $hospital->email = $request->email;
        $hospital->address = $request->address;
        $hospital->address_ar = $request->address_ar;
        $hospital->website = $request->website;
        $hospital->category_id = $request->category;
        $hospital->description = $request->description;
        $hospital->description_ar = $request->description_ar;
        $hospital->comment = $request->comment;
        $hospital->provider_type = $request->provider_name2;
        $hospital->card_type = $request->card_type;
        $date_s = Carbon::createFromFormat('Y-m-d', $request->contract_date);
        $date_new = $date_s->addYear(1)->toDateString();
        $hospital->expiry_date = $date_new;
        $hospital->status = 0;
        $hospital->on_off = 0;
        $hospital->save();


        session()->flash('add', 'Data has been added successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $request->validate([
            'provider_name' => 'required',
            'provider_name_ar' => 'required',
        ], [
            'provider_name.required' => 'Enter Name Please',
            'provider_name_ar.required' => 'Enter Arabic Name Please',
        ]);
        $id = $request->id;
        $edit_hospital = Hospital::find($id);
        $edit_hospital->update([
            'name' => $request->provider_name,
            'name_ar' => $request->provider_name_ar,
            'contract_date' => $request->contract_date,
            'expiry_date' => $request->expiry_date,
            'cr_no' => $request->cr_no,
            'place' => $request->place,
            'place_ar' => $request->place_ar,
            'contact1' => $request->contact,
            'contact2' => $request->contact2,
            'email' => $request->email,
            'address' => $request->address,
            'address_ar' => $request->address_ar,
            'website' => $request->website,
            'category_id' => $request->category,
            'description' => $request->description,
            'description_ar' => $request->description_ar,
            'provider_type' => $request->provider_name2 != '' ? $request->provider_name2 : $edit_hospital->provider_type,
            'card_type' => $request->card_type != '' ? $request->card_type : $edit_hospital->card_type,
            'comment' => $request->comment,

        ]);
        session()->flash('edit', 'Data has been editing successfully');
        return back();

    }


    public function edit_status(Request $request)
    {
        $id = $request->id_inp;
        $hospital_status = Hospital::find($id);
        $hospital_status->update([
            'status' => $request->status,
        ]);
        session()->flash('edit', 'Data has been editing successfully');
        return back();
    }

    public function edit_status_online(Request $request)
    {
        $id = $request->id_inp;
        $hospital_status = Hospital::find($id);
        $hospital_status->update([
            'on_off' => $request->on_off,
        ]);
        session()->flash('edit', 'Data has been editing successfully');
        return back();
    }
    
    public function provider_on($status)
    {

        $hospitals = Hospital::where('online', $status)->get();
        $category = Category::all();
        $category1 = Category::all();
        return view('hospital.hospital_all', compact('hospitals', 'category', 'category1'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Hospital $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id_inp;
        Hospital::destroy($id);
        session()->flash('delete', 'Data has been deleted successfully');
        return back();
    }

    public function hospital_delete_checked(Request $request)
    {
        $idp = $request->check;
        Hospital::whereIn('id', $idp)->delete();
        return response()->json(['success' => 'Data has been deleted successfully']);
    }

    public function importHospital(Request $request)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx'
        ], [
            'import.required' => 'Please Add File Import',
            'import.mimes' => 'Attachment format should be just xlsx',
        ]);
        $file = $request->file('import');
        Excel::import(new HospitalImport(), $file);
        session()->flash('add', 'Data has been added successfully');
        return back();


    }


    public function importServices(Request $request)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx'
        ], [
            'import.required' => 'Please Add File Import',
            'import.mimes' => 'Attachment format should be just xlsx',
        ]);
        $file = $request->file('import');
        Excel::import(new ServiceImport(), $file);
        session()->flash('add', 'Data has been added successfully');
        return back();


    }
    
    public function provider_draft($status)
    {

        $hospitals = Hospital::where('status',$status)->get();
        $category = Category::all();
        $category1 = Category::all();
        return view('hospital.hospital_all', compact('hospitals','category','category1'));
    }
    
     public function provider_online($status)
    {

        $hospitals = Hospital::where('on_off',$status)->get();
        $category = Category::all();
        $category1 = Category::all();
        return view('hospital.hospital_all', compact('hospitals','category','category1'));
    }

    public function provider_expired($status)
    {

        $hospitals = Hospital::where('expiry_date','<',$status)->get();
        $category = Category::all();
        $category1 = Category::all();
        return view('hospital.hospital_all', compact('hospitals','category','category1'));
    }

}
