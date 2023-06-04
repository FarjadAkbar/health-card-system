<?php

namespace App\Http\Controllers;

use App\MailTemplate;
use App\Card;
use App\GeneralInfo;
use Illuminate\Http\Request;

class MailTemplateController extends Controller
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

    public function index()
    {
        //
        $data = MailTemplate::all();
        $i = 0;
        return view('mails.templates.index', compact('data', 'i'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $templateStatus = MailTemplate::select('status')->get();
        $card = Card::distinct()->whereNotIn('status', $templateStatus->toArray())->get(['status']); 
        return view('mails.templates.add', compact('card'));
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
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'status' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'message' => 'required',
        ]);

        $template = new MailTemplate();

        $template->mail_title = $request->title;
        $template->mail_subject = $request->subject;
        $template->mail_description = $request->description;
        $template->mail_body = $request->message;
        $template->status = $request->status;

        $template->save();
        
        return redirect()->back()->with('success', 'Template add done successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MailTemplate  $mailTemplate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $template = MailTemplate::find($id);
        $general_info = GeneralInfo::first();
        $card = Card::first();

        $type = $card->group_company ? 'Health Card' : 'Group Card';
        
        $template->mail_subject = str_replace('{card_customer_name}', $card->name, $template->mail_body );
        $template->mail_subject = str_replace('{card_type}', $type, $template->mail_subject );
                
        $template->mail_body = str_replace('{company}', $general_info->company_name, $template->mail_body );
        $template->mail_body = str_replace('{company_phone}', $general_info->phone, $template->mail_body );
        $template->mail_body = str_replace('{company_email}', $general_info->email, $template->mail_body );

        
        $template->mail_body = str_replace('{card_cpr}', $card->cpr_no, $template->mail_body );
        $template->mail_body = str_replace('{card_cr}', $card->cpr_no, $template->mail_body );
        $template->mail_body = str_replace('{card_customer_name}', $card->name, $template->mail_body );
        $template->mail_body = str_replace('{card_customer_email}', $card->email, $template->mail_body );
        $template->mail_body = str_replace('{issue_date}', $card->date, $template->mail_body );
        $template->mail_body = str_replace('{last_renewal_date}', $card->last_expiry, $template->mail_body );

        $template->mail_body = str_replace('{card_period}', $card->period, $template->mail_body );
        $template->mail_body = str_replace('{card_type}', $type, $template->mail_body );
        $template->mail_body = str_replace('{expiry_date}', $card->period, $template->mail_body );

        return view('mails.templates.show', compact('template', 'general_info', 'card'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MailTemplate  $mailTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $template = MailTemplate::find($id);
        $templateStatus = MailTemplate::select('status')->get();
        $card = Card::distinct()->get(['status']); 
        return view('mails.templates.edit', compact('template', 'card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MailTemplate  $mailTemplate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request->all());
        $request->validate([
            // 'title' => 'required',
            // 'status' => 'required',
            'subject' => 'required',
            'description' => 'required',
            'message' => 'required',
        ]);
        $template = MailTemplate::find($id);
        
        // $template->mail_title = $request->title;
        $template->mail_subject = $request->subject;
        $template->mail_description = $request->description;
        $template->mail_body = $request->message;
        // $template->status = $request->status;

        $template->save();

        return redirect()->route('templates.index')->with('success', 'Template edit done successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MailTemplate  $mailTemplate
     * @return \Illuminate\Http\Response
     */
    public function destroy(MailTemplate $mailTemplate)
    {
        //
    }
}
