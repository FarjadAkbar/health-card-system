<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Hospital;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HospitalDirectoryController extends Controller
{
    public function index(Request $request)
    {

        $hospital2 = Hospital::where('on_off', 1)->where('card_type',1)->get();
        return view('hospital_directory', compact('hospital2'));

    }
     public function index_plus_view()
    {
        return view('hospital_directory_plus');
    }
    
     public function index_hospital($id)
    {

        $hospital2 = Hospital::where('on_off', 1)->where('provider_type',$id)->where('card_type','2')->get();
        return view('hospital_directory', compact('hospital2'));

    }
    
     public function index2(Request $request)
    {

        $hospital2 = Hospital::where('on_off', 1)->paginate(30);
        return view('hospital_mobile', compact('hospital2'));

    }
    
    public function hospital_search(Request $request){
        $hospital = $request->search;
        if ($hospital) {
            $hospital_search = Hospital::where('on_off',1)
            ->where(
                function($query) use ($hospital){
                  return $query
                        ->where('name', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('name_ar', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('place', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('place_ar', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('contact1', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('contact2', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('email', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('address', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('address_ar', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('website', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('place', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('place_ar', 'LIKE', '%' . $hospital . '%')
                        ->orWhere('category_id', 'LIKE', '%' . $hospital . '%');
                 })->get();
            
             return view('hospital_directory', compact('hospital_search', 'hospital'));
        } else {
            return back();
        }


    }
    

    public function hospital_search_page(){
            $hospital ='';
            $hospital_search = Hospital::where('on_off',1)->get();
            return view('hospital_directory', compact('hospital_search', 'hospital'));
    }
    
    
     public function hospital_search_phone(Request $request)
    {

        $hospital = $request->search;
        $hospital_search = Hospital::where('name', 'LIKE', '%' . $hospital . '%')->orWhere('name_ar', 'LIKE', '%' . $hospital . '%' )->orWhere('name_ar', 'LIKE','%' . $hospital . '%')->orWhere('name_ar', 'LIKE', '%' . $hospital . '%')->orWhere('name_ar', 'LIKE', '%' . $hospital . '%')->orWhere('place', 'LIKE', '%' . $hospital . '%')->orWhere('place_ar', 'LIKE', '%' . $hospital . '%')->orWhere('contact1', 'LIKE', '%' . $hospital . '%')->orWhere('contact2', 'LIKE', '%' . $hospital . '%')->orWhere('email', 'LIKE', '%' . $hospital . '%')->orWhere('address', 'LIKE', '%' . $hospital . '%')->orWhere('address_ar', 'LIKE', '%' . $hospital . '%')->orWhere('website', 'LIKE', '%' . $hospital . '%')->orWhere('category_id', 'LIKE', '%' . $hospital . '%')->get();
        return view('hospital_mobile', compact('hospital_search', 'hospital'));


    }

    function action(Request $request)
    {
        $data = $request->all();

        $search = $data['query'];

        $filter_data = Hospital::select('name', 'name_ar')
            ->where('on_off',1)
            ->where(
                function($query) use ($search){
                  return $query
                  ->where('name', 'LIKE', '%' . $search . '%')
                  ->orWhere('name_ar', 'LIKE', '%' . $search . '%');
                 })->get();
        return response()->json($filter_data);
    }

    public function hospital_profile($id)
    {
        $hospital_id = $id;
        $hospital = Hospital::where('id', $hospital_id)->first();
        $service = Service::where('hospital_id', $hospital_id)->get();
        $hospital2 = Hospital::paginate(3);

        return view('hospital_profile', compact('hospital', 'service', 'hospital2'));
    }

    public function hospital_category($id)
    {
        $hospital = Hospital::where('category_id',$id)->paginate(30);
        return view('hospital_category',compact('hospital'));
    }
}

