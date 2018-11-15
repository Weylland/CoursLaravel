@extends('layout')

@section('contenu')
    <div>
        <h1 class="title is-1">Mon compte</h1>
        <p>Vous êtes bien connecté</p>
        <a href="/deconnexion" class="button">Déconnexion</a>
    </div>
    <form class="section" action="/modification-mot-de-passe" method="post">
        {{ csrf_field() }}
        <div class="field">
                <label class="label">Nouveaux mot de passe</label>
                <p class="control has-icons-left">
                    <input class="input" type="password" name="password" placeholder="Mot de passe">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
                @if($errors->has('password'))
                    <p class="help is-danger" >{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="field">
                <label class="label">Confirmation</label>
                <p class="control has-icons-left">
                    <input class="input" type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
                    <span class="icon is-small is-left">
                        <i class="fas fa-lock"></i>
                    </span>
                </p>
                @if($errors->has('password_confirmation'))
                    <p class="help is-danger" >{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>
            <div class="field">
                <div class="control">
                    <button class="button is-link">Modifier mon mot de passe</button>
                </div>
            </div>
    </form>
@endsection