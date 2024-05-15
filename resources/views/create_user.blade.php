<!-- resources/views/users/create.blade.php -->

@extends('layouts.ap')

@section('content')
    <div class="container">
        <h1>Créer un nouveau utilisateur</h1>
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Adresse e-mail :</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" class="form-control">
            </div><br>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection
