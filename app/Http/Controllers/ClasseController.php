<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
      return view('users.prof.classe.listeclasse');
    }

    public function voirplus()
    {
      return view('users.prof.classe.classe_voirplus');
    }
  
}
