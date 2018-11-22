@extends('layout')

@section('contenu')
    <div class="section">
        <div>
            <h1 class="title is-1">Mon compte</h1>
        </div>
        <form class="section" action="/modification-avatar" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="field">
                    <label class="label">Nouvel avatar</label>
                    <p class="control has-icons-left">
                        <input class="input" type="file" name="avatar" placeholder="Mot de passe">
                    </p>
                    @if($errors->has('avatar'))
                        <p class="help is-danger" >{{ $errors->first('avatar') }}</p>
                    @endif
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-link">Modifier mon avatar</button>
                    </div>
                </div>
        </form>
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
    </div>
@endsection