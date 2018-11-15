@extends('layout')

@section('contenu')
    <div>
        <h1 class="title is-1">{{ $utilisateur->email }}</h1>
    </div>
@endsection