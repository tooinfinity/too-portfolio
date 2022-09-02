<?php

namespace App\Http\Controllers\Api\V1\contact;

use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreContactRequest;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactRequest $request) {
 
        //  Store data in database
        Contact::create($request->all());
 
        //  Send mail to Application Admin
        Mail::send('emails.contact', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'bodyMessage' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('touwfiqdev@gmail.com', 'Admin')->subject($request->get('subject'));
        });
        return response()->json(['success' => 'The email has been sent.']);
    }
}
