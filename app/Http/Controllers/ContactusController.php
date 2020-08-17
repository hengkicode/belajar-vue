<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;

use Mail;

class ContactusController extends Controller
{
    public function index(){

        $pages = Page::all();

        return view('website.contact', ['pages' => $pages ]);
        
    }

    public function sendMessage(Request $request){

        $input = $request->all();

        $pages = Page::All();

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        

        Mail::send('mails.contactus', ['nameInput' => $input['name'], 'messageInput' => $input['message']], function($m){
            $m->from('no-replay@pixel-penguin.com', 'pixel pingun');
            $m->to('gerit@pizel.com');

        });


        return view('website.contact', ['pages' => $pages ])->with('succesMessage', 'Thank you, your message has been sent!') ;
        // dd($input);
    }

    public function sendMessageAjax(Request $request){
        $input = $request->all();

        dd($input);
    }
}
