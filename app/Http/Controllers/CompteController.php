<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function acceuil () {
        if(auth()->guest()) {
            flash("Vous devez être connecté pour voir cette page.")->error();

            return redirect('/connexion');
        }
        return view('mon-compte');
    }
    
    public function deconnexion() {
        auth()->logout();
        flash("Vous êtes maintenant déconnecté.")->success();
        return redirect('/');
    }

    public function modificationMotDePasse() {
        if(auth()->guest()) {
            flash("Vous devez être connecté pour voir cette page.")->error();
            return redirect('/connexion');
        }
        request()->validate([
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ]);

        auth()->user()->update([
            'mot_de_passe' => bcrypt(request('password')),
        ]);
        flash("Votre mot de passe a bien été modifier.")->success();

        return redirect('/mon-compte');
    }
}
