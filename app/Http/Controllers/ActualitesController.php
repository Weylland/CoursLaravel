<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualitesController extends Controller
{
    public function liste() {
        $messages = auth()->user()
            ->suivis
            ->load('messages')
            ->flatMap->messages
            ->sortByDesc->created_at;

        return view('actualites', [
            'messages' => $messages,
        ]);
    } 
}
