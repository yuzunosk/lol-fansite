<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Log;
use App\Contact;



class ContactController extends Controller
{
    public function input()
    {
        return view('mail.input');
    }


    public function send(Request $request)
    {
        Log::info('処理を開始します' . $request);
        $this->validate($request, [
            'name'  => 'required',
            'email' => 'required|email',
            'message' => 'present',
        ]);
    
    

        $contact = new Contact($request->all());
        Log::info('コンタクトインスタンス:' . $contact);

        return view('mail.send', compact('contact'));
    }

    public function process(Request $request)
    {
        return view('complete');
    }
}
