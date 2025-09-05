<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class MessagesController extends Controller
{
    public function store(){
        $data = request()->all();
        $message = new Message();

        $message->subject = $data['subject'];

        $message->message = $data['message'];
        
        $message->userid = Auth::id();
        $message->save();

        session()->flash('success', 'Message Submitted Successfully');

        return redirect('/');

    }
}
