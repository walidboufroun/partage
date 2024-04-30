<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        // Votre logique ici
        return view('index'); // Ceci affichera la vue admin.index
    }
    public function files()
    {
        $files = File::all(); // Récupérer tous les fichiers de la base de données
        return view('file', ['files' => $files]); // Passer les fichiers à la vue admin.files
    }
    public function ajouterFileForm()
    {
        return view('add_file');
    }
    /*
    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');

        // Sauvegarde du fichier dans le dossier storage/app
        $path = $file->store('files');

        // Enregistrement des informations du fichier dans la base de données
        $newFile = new File();
        $newFile->name = $file->getClientOriginalName();
        $newFile->path = $path;
        $newFile->size = $file->getSize();
        // Vous pouvez également récupérer l'id de l'utilisateur connecté ici
        $newFile->id_user = 1; //auth()->id(); // Exemple: si l'authentification est configurée

        $newFile->save();

        return redirect()->back()->with('success', 'Le fichier a été ajouté avec succès.');
    }*/


    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');

        // Sauvegarde du fichier dans le dossier storage/app
        $path = $file->store('files');

        // Modifier le chemin pour le stocker dans le dossier storage
        $newPath = Storage::disk('local')->putFile('public', $file);

        // Enregistrement des informations du fichier dans la base de données
        $newFile = new File();
        $newFile->name = $file->getClientOriginalName();
        $newFile->path = $newPath;
        $newFile->size = $file->getSize();
        // Vous pouvez également récupérer l'id de l'utilisateur connecté ici
        $newFile->id_user = 1; //auth()->id(); // Exemple: si l'authentification est configurée

        $newFile->save();

        return redirect()->back()->with('success', 'Le fichier a été ajouté avec succès.');
    }

    public function download(File $file)
    {
        // Récupérer le chemin du fichier à partir de la base de données
        $filePath = $file->path;

        // Télécharger le fichier en utilisant Storage
        return Storage::download($filePath);
    }

    public function preview(File $file)
    {
        // Récupérer le chemin du fichier à partir de la base de données
        $filePath = $file->path;

        // Générer une URL signée pour le fichier pour afficher un aperçu
        $url = Storage::url($filePath);

        // Rediriger l'utilisateur vers l'URL du fichier
        return redirect($url);
    }
    
}
