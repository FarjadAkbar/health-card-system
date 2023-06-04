<?php

namespace App\Http\Controllers;

use App\CustomerEmails;
use Illuminate\Http\Request;

class CustomerEmailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view();
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
     * @param  \App\CustomerEmails  $customerEmails
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerEmails $customerEmails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerEmails  $customerEmails
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerEmails $customerEmails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerEmails  $customerEmails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerEmails $customerEmails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerEmails  $customerEmails
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerEmails $customerEmails)
    {
        //
    }
}
