<?php

namespace App\Http\Controllers;

use App\Contact;

use Illuminate\Http\Request;

use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact');
    }

    public function postContact(Request $request) {

        $this->validate($request, [
            'fullname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required']);
        
        $data = array(
            'fullname' => $request->fullname,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymessage' => $request->message
            );
   
        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('demo@gmail.com');
            $message->subject($data['subject']);
        });
       
        return redirect('/');
    }

   
}
