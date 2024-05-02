<!-- resources/views/auth/login.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Connexion</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Se Connecter</button>
            </div>
        </form>
    </div>
@endsection
