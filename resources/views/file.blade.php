@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des fichiers</h1>
        <ul class="list-group">
            @foreach($files as $file)
                <li class="list-group-item">
                    <div class="">
                        <div class="col">{{ $file->id_file }}{{ $file->name }}</div>
                        <div class="col text-right">
                            <!-- Assurez-vous de passer l'ID du fichier à la route -->
                            <a target="_blank" href="{{ route('file.download', $file->id) }}" class="btn btn-primary">Télécharger</a>
                            <a target="_blank" href="{{ route('file.preview', $file->id ) }}" class="btn btn-secondary">Aperçu</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
