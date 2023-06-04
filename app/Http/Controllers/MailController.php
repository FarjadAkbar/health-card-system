<?php

namespace App\Http\Controllers;

use App\Card;
use App\card_plus;
use App\Card_type;
use App\GeneralInfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;


class MailController extends Controller
{

    public function prx($value)
    {
        echo "<pre>";
        print_r($value);
        die;
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllMails(Request $request)
    {
        $data = DB::table('mails')->orderBy('datetime', 'DESC')->get();
        return view('mails.show_mails', compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function NewMail()
    {
        $templates = DB::table('email_templates')->get();
        return view('mails.add_mail', compact('templates'));
    }

    public function GetCustomers($type)
    {
        $card_emails = [];
        $card = null;
        if ($type == "group_card") {
            $card = DB::table('cards')->where(['group_company' => 1])->orderBy('email', 'ASC')->get();
            // $this->prx($card);
        } elseif ($type == "health_card") {
            $card = DB::table('cards')->where('group_company', 0)->orderBy('email', 'ASC')->get();
        } elseif ($type == "plus_card") {
            $card = DB::table('card_pluses')->orderBy('email', 'ASC')->get();
        } elseif ($type == "all_card") {
            $cards_pluses_query = DB::table('card_pluses')->orderBy('email', 'ASC')->get();
            foreach ($cards_pluses_query as $card_pluses_query) {
                if ($card_pluses_query->email != null && $card_pluses_query != "NULL") {
                    array_push($card_emails, $card_pluses_query->email);
                }
            }
            $cards_query = DB::table('cards')->where('group_company', 0)->orderBy('email', 'ASC')->get();
            foreach ($cards_query as $card_query) {
                if ($card_query->email != null && $card_query->email != "NULL") {
                    array_push($card_emails, $card_query->email);
                }
            }
        }

        if (count($card_emails) == 0) {
            if (is_object($card)) {
                foreach ($card as $card_query) {
                    if ($card_query->email != null && $card_query->email != "NULL") {
                        array_push($card_emails, $card_query->email);
                    }
                }
            }
        }

        if (count($card_emails) == 0) {
            return response()->json(['status'   =>  'error']);
        } else {
            return response()->json(['status'   =>  'success', 'emails' => $card_emails]);
        }
    }

    public function SaveMail(Request $request)
    {
        // dd($request->post())
        $request->validate([
            'sent_to' => 'required',
            'card_type' => 'required',
            'template' => 'required',
            'subject' => Rule::requiredIf(function () use ($request) {
                return $request->template == 0;
            }),
            'greeting' => Rule::requiredIf(function () use ($request) {
                return $request->template == 0;
            }),
            'message' => Rule::requiredIf(function () use ($request) {
                return $request->template == 0;
            }),
        ]);


        $bcc_emails = [];
        $bcc_emails_string = null;
        $cc_emails_string = null;
        
        $card_emails = [];
        $card = null;

        if ($request->sent_to != "specific") {
            if ($request->card_type == "group_card") {
                if ($request->sent_to != "all") {
                    $card = DB::table('cards')->where([
                        'group_company' => 1,
                        'status'    =>  $request->sent_to
                    ])->whereNotNull('email')->get();
                } else {
                    $card = DB::table('cards')->where([
                        'group_company' => 1
                    ])->whereNotNull('email')->get();
                }
            } elseif ($request->card_type == "health_card") {
                if ($request->sent_to != "all") {
                    $card = DB::table('cards')->where([
                        'group_company' => 0,
                        'status'    =>  $request->sent_to
                    ])->whereNotNull('email')->get();
                } else {
                    $card = DB::table('cards')->where('group_company', 0)->whereNotNull('email')->get();
                }
            } elseif ($request->card_type == "plus_card") {
                if ($request->sent_to != "all") {
                    $card = DB::table('card_pluses')->where('status', $request->sent_to)->whereNotNull('email')->get();
                } else {
                    $card = DB::table('card_pluses')->whereNotNull('email')->get();
                }
            } elseif ($request->card_type == "all_card") {
                if ($request->sent_to != "all") {
                    $card = DB::table('cards')->where([
                        'status'    =>  $request->sent_to
                    ])->whereNotNull('email')->get();
                } else {
                    $card = DB::table('cards')->whereNotNull('email')->get();
                }
            }

            // if (count($card_emails) == 0) {
            //     if (is_object($card)) {
            //         foreach ($card as $card_query) {
            //             if ($card_query->email != null && $card_query->email != "NULL") {
            //                 array_push($card_emails, $card_query->email);
            //             }
            //         }
            //     }
            // }

            // if (count($card_emails) == 0) {
            //     return redirect('/mails/all')->with('success', 'No Customers were found in the selected criteria.');
            // } else {
            //     foreach ($card_emails as $email) {
            //         array_push($bcc_emails, $email);
            //     }
            // }
        } 

        if ($request->sent_to == "specific") {
            $selected_specific_emails = $request->selected_specific_emails;
            
            if (is_array($selected_specific_emails)) {
                $card = DB::table('cards')->whereIn('email', $selected_specific_emails)->whereNotNull('email')->get();
            } else{
                $card = DB::table('cards')->where('email', $selected_specific_emails)->whereNotNull('email')->get();
            }
            // foreach ($selected_specific_emails as $email) {
            //     array_push($bcc_emails, $email);
            // }
        }

        $cc_mails = [];
        if ($request->cc_all_mails != null) {
            $cc_all_mails = explode(",", $request->cc_all_mails);
            if (count($cc_all_mails) > 0) {
                foreach ($cc_all_mails as $value) {
                    array_push($cc_mails, trim($value));
                }
            }
        }
        // $this->prx($cc_mails);

        
        if ($card->isEmpty()) {
            return redirect('/mails/all')->with('success', 'Mail failed.');            
        }


        $subject = $request->subject;
        $greeting = $request->greeting;
        $body = $request->message;
        $cc_mail_done = false;
        $people_count = 0;
        
        $saveSubject = $request->subject;
        $saveGreeting = $request->greeting;
        $saveBody = $request->message;
        
        if($request->template != 0){
            $template = DB::table('email_templates')->where('id', $request->template)->first();  
        }
            $general_info = DB::table('general_infos')->first(); 

        $sender = env('MAIL_USERNAME');
        set_time_limit(0);
        foreach ($card as $c) {    
            $people_count++;
            
            if($request->template != 0){
                
                // db
                $saveSubject = $template->mail_subject;
                $saveGreeting = $template->mail_description;
                $saveBody = $template->mail_body;

                // Email
                $template->mail_body = str_replace('{company}', $general_info->company_name, $template->mail_body );
                $template->mail_body = str_replace('{company_phone}', $general_info->phone, $template->mail_body );
                $template->mail_body = str_replace('{company_email}', $general_info->email, $template->mail_body );
    
                $type = $c->group_company ? 'Health Card' : 'Group Card';
                
                $template->mail_subject = str_replace('{card_customer_name}', $c->name, $template->mail_subject );
                $template->mail_subject = str_replace('{card_type}', $type, $template->mail_subject );
                
                
                $template->mail_body = str_replace('{card_type}', $type, $template->mail_body );
                $template->mail_body = str_replace('{card_cpr}', $c->cpr_no, $template->mail_body );
                $template->mail_body = str_replace('{card_cr}', $c->cpr_no, $template->mail_body );
                $template->mail_body = str_replace('{card_customer_name}', $c->name, $template->mail_body );
                $template->mail_body = str_replace('{card_customer_email}', $c->email, $template->mail_body );
                $template->mail_body = str_replace('{issue_date}', $c->date, $template->mail_body );
                $template->mail_body = str_replace('{last_renewal_date}', $c->last_expiry, $template->mail_body );
    
                $template->mail_body = str_replace('{card_period}', $c->period, $template->mail_body );
                $template->mail_body = str_replace('{expiry_date}', $c->period, $template->mail_body );
                
                $subject = $template->mail_subject;
                $greeting = $template->mail_description;
                $body = $template->mail_body;
                
            }
            
            // $logo = "https://samacardsbh.com/company/" . $general_info->logo;

            $data = [
                        // 'logo' => $logo,
                        
                        'general_info' => $general_info,
                        'mail_body'   =>  $body, 
                        'greeting' => $greeting,
                    ];

            $recipient = $c->email;
            
            // Validate email addresses
            // if (!is_null($recipient)) {
                Mail::send('mails.mail_template', $data, 
                function ($message) use ($sender, $subject, $recipient, $cc_mails, $cc_mail_done) {
                    $message->from($sender, 'Sama Card');
                    $message->sender($sender, 'Sama Card');
                    if (filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
                        $message->to($recipient);
                    } else {
                        $message->to('default@example.com');
                    }
                    // $message->to($recipient);

                    if (count($cc_mails) > 0 && $cc_mail_done == false) {
                        $message->cc($cc_mails);
                    }
                    $message->subject($subject);
                    $message->priority(3);
                    $cc_mail_done = true;
                });
            // }
        }
        

        foreach($card as $c) {
            $bcc_emails_string .= '"'.$c->email.'",';
        }
        $bcc_emails_string = rtrim($bcc_emails_string, ',');

        foreach ($cc_mails as $email) {
            $cc_emails_string .= '"' . $email . '",';
        }
        $cc_emails_string = rtrim($cc_emails_string, ',');


        DB::table("mails")->insert([
            'subject'   =>  $saveSubject,
            'message'   =>  $saveBody,
            'greeting'   =>  $saveGreeting,
            'sent_to'   =>  $request->sent_to,
            'card_type'   =>  $request->card_type,
            'to_email'   =>  $bcc_emails_string,
            'cc'   =>  $cc_emails_string,
            'template_id' => $request->template,
            'people_count' => $people_count,
            'datetime'   =>  date('Y-m-d H:i:s')
        ]);
        // exit;

        return redirect('/mails/all')->with('success', 'Mail done successfully.');
    }

    public function DeleteMail(Request $request)
    {
        DB::table('mails')->where('id', $request->mail_id)->delete();
        return redirect('/mails/all')->with('success', 'Mail deleted successfully');
    }

    public function ViewMail($id)
    {
        $data = DB::table('mails')->where('id', $id)->first();
        //dd($data);
        return view('mails.show', compact('data'));
    }
}
