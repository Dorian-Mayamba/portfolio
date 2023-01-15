<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm(){
        return view('Contact');
    }

    /**
     * @param ContactRequest $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function sendMessage(ContactRequest $request): RedirectResponse{
        $mail_data = $request->all();
        $mail = new ContactMail($mail_data);
        Mail::to("dorian.mayamba@gmail.com")->send($mail);
        $request->session()->flash('success', 'message sent');
        return back();
    }
}
