<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(view()->exists($id)){
            $cardCheck = DB::table('cards_check_days')->latest('id')->first();
  
 
            if(!$cardCheck || $cardCheck->date != date('Y-m-d')){
                $cards = Card::all();
                
                foreach($cards as $card){
                    $c = Card::find($card->id);
                    if($card->status == 'done' || $c->status == 'paid'){
                        $date1=date_create($card->expiry);
                        $date2=date_create(date('Y-m-d', strtotime(date('Y-m-d') . "+2 week")));
                        $diff=date_diff($date1, $date2);
                        
                         if(strtotime(date('Y-m-d')) > strtotime($c->expiry)){
                            $c->status = 'expired';
                        } 
                        else if($diff->format("%a") <= 14){
                            $c->status = 'renewal';
                        } 
                        $c->update();
                    }
                    
                    
                }
                DB::table('cards_check_days')->insert([
                            'date' => date('Y-m-d'),
                            'status' => '1'
                    ]); 
            }
            
            
            if($id == "index_group"){
                $cards = Card::where('group_company', 1);
            } else {
                $cards = Card::where('group_company', 0);
            }
            
            if(!auth()->user()->hasRole('Admin')){
                $cards->where('agent_id', auth()->user()->id);
            }
            return view($id, compact('cards'));
        }
        else
        {
            return view('404');
        }

     //   return view($id);
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
}
