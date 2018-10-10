@extends('layout')

@section('contenu')
    <form action="/connexion" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label class="label">Email</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input is-danger" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            @if($errors->has('email'))
                <p class="help is-danger" >{{ $errors->first('email') }}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">Mot de passe</label>
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
            <div class="control">
                <button class="button is-link" >Se connecter</button>
            </div>
        </div>
    </form>
@endsection