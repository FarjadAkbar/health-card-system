<?php

namespace App\Http\Controllers;

use App\Card;
use App\card_plus;
use App\Card_type;
use App\Imports\CustomerImport;
use App\Imports\GroupImport;
use App\Imports\HospitalImport;
use App\Package_type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class AllCardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        // $user = User::all();
        if(auth()->user()->hasRole('Admin')){
           $card = Card::where('group_company', 0)->orderByDesc('id')->get();
        } else{
            $card = Card::where('group_company', 0)->where('agent_id', auth()->user()->id)->orderByDesc('id')->get();
        }
        return view('cards.all', compact('card', 'package', 'card_type'))->with('i', ($request->input('page', 1) - 1) * 5);
    }


     public function index_plus()
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
        $c = DB::table('card_pluses')->orderByDesc('id')->get();
        $card = card_plus::all();
        return view('cards.all_plus', compact('c', 'package', 'card_type', 'user','card'));
    }



    public function index_group()
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        // $user = User::all();
        if(auth()->user()->hasRole('Admin')){
           $card = Card::where('group_company', 1)->orderByDesc('id')->get();
        } else{
            $card = Card::where('group_company', 1)->where('agent_id', auth()->user()->id)->orderByDesc('id')->get();
        }
        return view('cards.all_group', compact('card', 'package', 'card_type'));
    }


    public function index_draft($status)
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
        
        if(auth()->user()->hasRole('Admin')){
           $card = Card::where('group_company', 0);
        } else{
            $card = Card::where('group_company', 0)->where('agent_id', auth()->user()->id);
        }

        if($status == 'active'){
            $card = $card->whereIn('status', ['paid', 'done'])->orderBy('id','desc')->orWhere('online',$status)->get();
        } else if($status == 'non-active'){
            $card = $card->whereNotIn('status', ['paid', 'done'])->orderBy('id','desc')->orWhere('online',$status)->get();
        } else{
            $card = $card->where('status',$status)->orderBy('id','desc')->orWhere('online',$status)->get();
        }

        if($status == '1'){
            $status = 'Online';
        }
        return view('cards.all_draft', compact('card','package','card_type','user', 'status'));
    }

    public function group_draft($status)
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
        if(auth()->user()->hasRole('Admin')){
           $card = Card::where('group_company', 1);
        } else{
            $card = Card::where('group_company', 1)->where('agent_id', auth()->user()->id);
        }

        if($status == 'active'){
            $card = $card->whereIn('status', ['paid', 'done'])->orderBy('id','desc')->orWhere('online',$status)->get();
        } else if($status == 'non-active'){
            $card = $card->whereNotIn('status', ['paid', 'done'])->orderBy('id','desc')->orWhere('online',$status)->get();
        } else{
            $card = $card->where('status',$status)->orderBy('id','desc')->orWhere('online',$status)->get();
        }

        if($status == '1'){
            $status = 'Online';
        }
        return view('cards.all_group_draft', compact('card','package','card_type','user', 'status'));
    }


    public function index_today_sale()
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
   
        if(auth()->user()->hasRole('Admin')){
           $card = Card::where('group_company', 0);
        } else{
            $card = Card::where('group_company', 0)->where('agent_id', auth()->user()->id);
        }


        $card = $card->where('date',date('Y-m-d'))->whereIn('status', ['paid', 'done'])->orderBy('id','desc')->get();

        return view('cards.today_sale', compact('card','package','card_type','user'));
    }

    public function group_today_sale(){
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
         if(auth()->user()->hasRole('Admin')){
           $card = Card::where('group_company', 1);
        } else{
            $card = Card::where('group_company', 1)->where('agent_id', auth()->user()->id);
        }

        $card = $card->where('date',date('Y-m-d'))->whereIn('status', ['paid', 'done'])->orderBy('id','desc')->get();

        return view('cards.today_sale', compact('card','package','card_type','user'));
    }
     public function plus_draft($status)
    {
        $package = Package_type::all();
        $card_type = Card_type::all();
        $user = User::all();
        $card = card_plus::where('status',$status)->orWhere('online',$status)->get();
        return view('cards.all_plus_draft', compact('card','package','card_type','user'));
    }

    public function update(Request $request)
    {
        $id = $request->id_inp;

        DB::table('cards')->where('father_id',$id)->orWhere('cpr_no',$id)->update([
            'status' => $request->status,
        ]);

        session()->flash('add', 'Data has been updated successfully');
        return back();
    }
    
     public function update_plus(Request $request)
    {
        $id = $request->id_inp;

        DB::table('card_pluses')->where('cpr_no',$id)->update([
            'status' => $request->status,
        ]);

        session()->flash('add', 'Data has been updated successfully');
        return $id;

    }


    public function destroy(Request $request)
    {
        $id = $request->id_inp;
        Card::destroy($id);
        session()->flash('add', 'Data has been deleted successfully');
       return back();
    }
    
    public function destroy_plus(Request $request)
    {
        $id = $request->id_inp;
        card_plus::destroy($id);
        session()->flash('add', 'Data has been deleted successfully');
        return back();
    }

    public function importCustomer(Request $request)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx'
        ], [
            'import.required' => 'Please Add File Import',
            'import.mimes' => 'Attachment format should be just xlsx',
        ]);
        $file = $request->file('import');
        Excel::import(new CustomerImport(), $file);
        session()->flash('add', 'Data has been added successfully');
        return back();


    }

    public function importCompany(Request $request)
    {
        $request->validate([
            'import' => 'required|mimes:xlsx'
        ], [
            'import.required' => 'Please Add File Import',
            'import.mimes' => 'Attachment format should be just xlsx',
        ]);
        $file = $request->file('import');
        Excel::import(new GroupImport(), $file);
        session()->flash('add', 'Data has been added successfully');
        return back();


    }
}
