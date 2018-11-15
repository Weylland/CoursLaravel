<?php

namespace App\Http\Controllers;

use App\Message;

class MessagesController extends Controller
{
    public function nouveau() {
        request()->validate([
            'message' => ['required'],
        ]);

        Message::create([
            'utilisateur_id' => auth()->id(),
            'contenu' => request('message'),
        ]);

        flash("Votre message a bien été publié.")->success();
        return back();
    }
}
