<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Etudiant;
use App\Models\Semestre;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function welcome() {
        $etudiants = Etudiant::all();
        $semestres = Semestre::all();
        $matieres = Matiere::all();
        return view('welcome', ['etudiants'=>$etudiants, 'semestres'=>$semestres, 'matieres'=>$matieres]);
    }

    public function store(Request $request){
        $projet = Etudiant::create([
            'prenom' => $request->prenom,
            'nom' => $request->nom
            
        ]);
        $projet->semestres()->attach($request->semestres);

        $projet->matieres()->attach([
            $request->matieres => [
                'note' => $request->note,
                'examen' => $request->examen
            ]
        ]);
       
        return redirect('/classe'); 
    }

    public function classe() {
        $etudiants = Etudiant::all();
        return view('classe', ['etudiants' => $etudiants]);
    }
}
