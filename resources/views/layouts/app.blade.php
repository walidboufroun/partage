<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App</title>
    <!-- Intégrer les styles CSS de Bootstrap ou tout autre framework CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Intégrer vos propres styles CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('users.create') }}">Ajouter user</a>
            <a class="navbar-brand" href="{{ route('users.index') }}">Users</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/files">Files</a>
                    </li>
                    <li class="nav-item">

                        @if (auth()->check())
                            <a class="nav-link" href="">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-link nav-link">Se Déconnecter</button>
                            </form>
                        @else
                            <a class="nav-link" href="{{ route('login') }}">Se Connecter</a>
                        @endif
                       
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
