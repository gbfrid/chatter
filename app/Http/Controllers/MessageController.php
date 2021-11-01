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
        $users = User::all();
        return view('messages.index', [
            'messages' => $messages,
            'users' => $users,
        ]);
    }


    public function store(Request $request, $id = 0)
    {

        $request->user()->messages()->create([
            'user_id' => auth()->id(),
            'target_id' => $id,
            'text' => $request->text

        ]);

        return back();
    }

    public function convo($id)
    {
        $messages = Message::all();
        $users = User::all();
        return view('messages.convo', [
            'id' => $id,
            'messages' => $messages,
            'users' => $users,
        ]);
    }


}
