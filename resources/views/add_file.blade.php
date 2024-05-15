<!-- resources/views/admin/ajouter_file.blade.php -->

@extends('layouts.ap')

@section('content')
    <div class="container">
        <h1>Ajouter un fichier</h1>
        <form action="{{ route('admin.upload') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">Choisir un fichier :</label>
                <input type="file" name="file" id="file" class="form-control-file">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection
