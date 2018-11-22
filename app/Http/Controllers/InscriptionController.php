<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire() {
        return view('inscription');
    }

    public function traitement() {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required', ''],
        ]);
    
        $utilisateur = Utilisateur::create([
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
        ]);
        
        flash('vous vous êtes enregistré avec succès.')->success();
        return redirect('acceuil');
    }
}
