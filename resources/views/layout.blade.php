<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" rel="stylesheet" type="text/css">
        <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
        
    </head>
    <body>
        <div class="navbar is-light">
            <div class="navbar-menu">
                <div class="navbar-start">
                    @include('partials.navbar-item', [ 'lien' => '/', 'texte' => 'Acceuil'])
                    @auth
                        @include('partials.navbar-item', [ 'lien' => 'actualites', 'texte' => 'Actualités'])
                        @include('partials.navbar-item', [ 'lien' => auth()->user()->email, 'texte' => auth()->user()->email])
                    @endauth
                </div>
                <div class="navbar-end">
                    @auth
                        @include('partials.navbar-item', [ 'lien' => 'mon-compte', 'texte' => 'Mon compte'])
                        @include('partials.navbar-item', [ 'lien' => 'deconnexion', 'texte' => 'Déconnexion'])
                    @else
                        @include('partials.navbar-item', [ 'lien' => 'connexion', 'texte' => 'Connexion'])
                        @include('partials.navbar-item', [ 'lien' => 'inscription', 'texte' => 'Inscription'])
                    @endauth
                </div>
            </div>
        </div>
        <div class="container">
            @include('flash::message')
            @yield('contenu')
        </div>
    </body>
</html>
