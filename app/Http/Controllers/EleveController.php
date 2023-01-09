<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function listeEleve(){

        return view('users.eleves.liste_eleves');
    }

    public function listeAbsence(){

        return view('users.prof.classe.liste_eleves.liste_absence');
    }

    public function listeEnseignant(){

        return view('users.prof.classe.liste_eleves.liste_enseignant');
    }
    public function cahierDeTexte(){

        return view('users.prof.classe.liste_eleves.cahierdetexte');
    }
    public function registreAppel(){

        return view('users.prof.classe.liste_eleves.registre_appel');
    }

    public function registreNote(){

        return view('users.prof.classe.liste_eleves.registre_note');
    }
}
