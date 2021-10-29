<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;

use Illuminate\Http\Request;

class MessageController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $messages = Message::all();
        return view('messages.index', [
            'messages' => $messages,
        ]);
    }


    public function store(Request $request)
    {


        $request->user()->messages()->create([
            'user_id' => auth()->id(),
            'target_id' => 2,
            'text' => $request->text

        ]);

        return back();
    }


}
