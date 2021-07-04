<?php


namespace App\Http\Controllers;


use App\Models\departement;
use App\Models\enseignant;
use App\Models\etudiant;
use App\Models\filiere;

class HomeController
{
  function index(){
      return view('index', [
          'countFilieres' => count(filiere::all()),
          'countDeparts' => count(departement::all()),
          'countEnseignants' => count(enseignant::all()),
          'countEtudiants' =>  count(etudiant::all()),
      ]);
  }
}
