<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NouveauSuiveurMail extends Mailable
{
    use Queueable, SerializesModels;

    public $suiveur;

    public function __construct($suiveur)
    {
        $this->suiveur = $suiveur;
    }

    public function build()
    {
        return $this->markdown('mails.nouveau_suiveur')->subject('Vous avez un nouveau suiveur !');
    }
}
