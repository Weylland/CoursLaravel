<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function acceuil () {
        return view('mon-compte');
    }
    
    public function deconnexion() {
        auth()->logout();
        flash("Vous êtes maintenant déconnecté.")->success();
        return redirect('/');
    }

    public function modificationMotDePasse() {
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

    public function modificationAvatar() {
        request()->validate([
            'avatar' => ['required', 'image'],
        ]);

        $path = request('avatar')->store('avatars', 'public');

        auth()->user()->update([
            'avatar' => $path
        ]);

        flash("Votre avatar a bien été mis à jour.")->success();
        return back();
    }
}
