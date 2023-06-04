<?php

namespace App\Http\Controllers;

use App\Card;
use App\Notifications\AddCard;
use App\Notifications\AddCardNotification;
use App\Package_type;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;
use App\card_plus;
use Carbon\Carbon;


class ApplyCardController extends Controller
{
    public function index($id = null)
    {
        $package = Package_type::where('status', 1)->get();
        return view('apply_card', compact('package','id'));
    }
    
    public function index_plus($id = null)
    {
        $package = Package_type::where('status', 1)->where('card_id',2)->get();
        return view('apply_card_plus', compact('package','id'));
    }
   
    
    public function index2($id = null)
    {
        $package = Package_type::where('status', 1)->get();
        return view('apply_mobile', compact('package','id'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cpr' => 'required|unique:cards,cpr_no',
            'package' => 'required',
        ]);

        foreach ($request->input('name') as $key => $name) {
            $card = new Card();
            $card->name = $request->input('name')[$key];
            $card->cpr_no = str_replace(' ', '', $request->input('cpr')[$key]);
            $card->gender = $request->input('gender')[$key];
            $card->email = $request->input('email')[$key];
            $card->phone = $request->input('phone')[$key];
            $card->package_type = $request->input('package');
            $card->mobile = $request->input('mobile');
            $card->house = $request->input('house');
            $card->road = $request->input('road');
            $card->block = $request->input('block');
            $card->place = $request->input('place');
            $card->payment_method = $request->input('type');
            $card->comment = $request->input('note');
            $card->father_id = $request->input('cpr')[0];
            $card->status = 'draft';
            $card->online = 1;
            $card->date = date('Y-m-d');
            $card->first_issue_date = date('Y-m-d');
            $card->card_type_id = 1;
            $card->agent_id = 14;
            $card->price = $card->Package->package_prices ?? '';
            

            $card->period = '1Year';


            $date_s = Carbon::createFromFormat('Y-m-d', date('Y-m-d'));
            $date = 1;
            $date_new = $date_s->addYear($date)->toDateString();
            $card->expiry = $date_new;
            $card->last_expiry = $date_new;
            
            $card->save();
            
            // $user = Auth::user();
            //  Notification::send($user,new AddCardNotification($card));

if($request->input('email')[$key]){
            mailSend($card);
}

        }

        session()->flash('add', 'سوف يتم الاتصال بك من قبل موظف خدمة العملاء ');
        return back();
    }
    
    public function store_plus(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'cpr' => 'required|unique:cards,cpr_no',
        ]);

        foreach ($request->input('name') as $key => $name) {
            $card = new card_plus();
            $card->name = $request->input('name')[$key];
            $card->cpr_no = $request->input('cpr')[$key];
            $card->gender = $request->input('gender')[$key];
            $card->email = $request->input('email')[$key];
            $card->phone = $request->input('phone')[$key];
            $card->package_type = $request->input('package');
            $card->mobile = $request->input('mobile');
            $card->house = $request->input('house');
            $card->road = $request->input('road');
            $card->block = $request->input('block');
            $card->place = $request->input('place');
            $card->payment_method = $request->input('type');
            $card->comment = $request->input('note');
            $card->father_id = $request->input('cpr')[0];
            $card->status = 'draft';
            $card->online = 1;
            $card->date = date('Y-m-d');
            $card->first_issue_date = date('Y-m-d');
            $card->card_type_id = 1;
            $card->agent_id = $request->input('agent');
            $card->price = $card->Package->package_prices ?? '';
            $card->save();

            // $user = Auth::user();
            // Notification::send($user,new AddCardNotification($card));



        }

        session()->flash('add', 'سوف يتم الاتصال بك بعد قليل ');
        return back();
    }

    public function readAllNotification(Request $request)
    {
        $userUnreadNotification = \auth()->user()->unreadNotifications;
        if ($userUnreadNotification) {
            $userUnreadNotification->markAsRead();
            return back();
        }
    }
}
