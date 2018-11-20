<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire() {
        if(auth()->check()) {
            flash("vous êtes déjà connecté.")->error();
            return redirect('/');
        }
        return view('connexion');
    }

    public function traitement() {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);

        $resultat = auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
        ]);

        if($resultat) {
            flash('Vous êtes maintenant connecté.')->success();
            return redirect('mon-compte');
        }

        return back()->withInput()->withErrors([
            'email' => 'Vos identifiants sont incorrects.'
        ]);
    }
}
