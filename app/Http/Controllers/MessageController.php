<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    //


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
