<?php

namespace App\Http\Controllers;

use App\Card;
use App\Hospital;
use App\Package_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class reportController extends Controller
{
    public function index()
    {
        $package = Package_type::all();
        return view('report.cardReport', compact('package'));
    }

   
    public function reportCard(Request $request)
    {

        $package = Package_type::all();
        $start = $request->start;
        $end = $request->end;
        $status = $request->status;
        $total = 0 ;
        $card = Card::all();
        
        if(!auth()->user()->hasRole('Admin')){
            $card = $card->where('agent_id', auth()->user()->id);
        }
        if ($request->package) {
            $card = $card->where('package_type', $request->package);
            $total = $card->where('package_type', $request->package)->sum('total');

        }
        if ($request->start && $request->end) {
            $start = $request->start;
            $end = $request->end;
            $card = $card->whereBetween('date', [$start, $end]);
            $total = $card->whereBetween('date', [$start, $end])->sum('total');
        }
        if ($request->status) {
            $card = $card->where('status', $request->status);
            $total = $card->where('status', $request->status)->sum('total');
        }
        if ($request->customer) {
            $card = $card->where('name', $request->customer);
            $total = $card->where('name', $request->customer)->sum('total');
        }
        if (auth()->user()->hasRole('Admin') && $request->agent) {
            $card = $card->where('agent_id', $request->agent);
            $total = $card->where('agent_id', $request->agent)->sum('total');
        }
        if ($request->gender) {
            $card = $card->where('gender', $request->gender);
            $total = $card->where('gender', $request->gender)->sum('total');
        }
        if ($request->place) {
            $card = $card->where('place', $request->place);
            $total = $card->where('place', $request->place)->sum('total');
        }
        if ($request->country) {
            $card = $card->where('country', $request->country);
            $total = $card->where('country', $request->country)->sum('total');
        }
        return view('report.cardReport', compact('card', 'package', 'start', 'end', 'status','total'));
    }

    public function agentcustomer()
    {
        $user_id = Auth::user()->id;
        $user_rate = Auth::user()->rate;
        $card = Card::where('agent_id',$user_id)->get();
        $total = Card::where('agent_id',$user_id)->where('status','paid')->sum('price');
        if(is_numeric($user_rate)){
        $total =($total * $user_rate)/100;
            
        }else{
            $total = 0;
            
        }

        return view('report.agent',compact('card','total'));
    }
    
     public function provider_index()
    {

        return view('report.hospitalReport');
    }
    
    
    public function reportprovider(Request $request)
    {

        $provider = $request->provider;
        $category = $request->category;
        $status = $request->status1;
        $online = $request->online;
        $hospital = Hospital::all();
        if ($request->provider) {
            $hospital = $hospital->where('provider_type', $request->provider);
        }
        if ($request->category) {
            $hospital = $hospital->where('category_id', $request->category);

        }
        if ($request->status1) {
            $hospital = $hospital->where('status', $request->status1);
        }
        if ($request->online) {
            $hospital = $hospital->where('on_off', $request->online);
        }
        return view('report.hospitalReport',compact('hospital','provider','category','status','online'));

    }
}
