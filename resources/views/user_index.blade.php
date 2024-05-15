<!-- resources/views/users/index.blade.php -->

@extends('layouts.ap')

@section('content')
    <div class="container">
        <h1>Liste des Utilisateurs</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Date de creation</th>
                    <!-- Ajoutez dautres colonnes si nécessaire -->
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
