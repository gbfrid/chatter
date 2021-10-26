<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', [
            'messages' => $messages
        ]);
    }


    public function store(Request $request)
    {
//        $this->validate($request, [
//            'body' => 'required'
//        ]);

        $request->user()->messages()->create([
            'user_id' => auth()->id(),
            'target_id' => 2,
            'text' => $request->text

        ]);

        return back();
    }
}
