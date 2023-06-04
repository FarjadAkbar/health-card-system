<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


function mailSend($c){
            
    $template = DB::table('email_templates')->where('status', $c->status)->first();
    if($template == null){
        $template = DB::table('email_templates')->where('id', '21')->first();  
    }
    $general_info = DB::table('general_infos')->first(); 

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
    $logo = "https://samacardsbh.com/company/" . $general_info->logo;


  $data = [
                        // 'logo' => $logo,
                        
                        'general_info' => $general_info,
                        'mail_body'   =>  $body, 
                        'greeting' => $greeting,
                    ];


    $recipient = $c->email;
            
    $sender = env('MAIL_USERNAME');
    set_time_limit(0);
        
    // Validate email addresses
    if (!is_null($recipient)) {
        Mail::send('mails.mail_template', $data, 
        function ($message) use ($sender, $subject, $recipient) {
            $message->from($sender, 'Sama Card');
            $message->sender($sender, 'Sama Card');
            if (filter_var($recipient, FILTER_VALIDATE_EMAIL)) {
                $message->to($recipient);
            } else {
                $message->to('default@example.com');
            }
            // $message->to($recipient);

            $message->subject($subject);
            $message->priority(3);
        });
    

        DB::table("mails")->insert([
            'subject'   =>  $saveSubject,
            'message'   =>  $saveBody,
            'greeting'   =>  $saveGreeting,
            'sent_to'   =>  $c->email,
            'card_type'   =>  $type,
            'to_email'   =>  '',
            'cc'   =>  '',
            'template_id' => $template->id,
            'people_count' => 1,
            'datetime'   =>  date('Y-m-d H:i:s')
        ]);
    }
}

?>