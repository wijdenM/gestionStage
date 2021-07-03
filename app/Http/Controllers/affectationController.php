<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\enseignant;
use App\Models\etudiant;

class affectationController extends Controller
{
   function affecter(Request $req)
   {
   	  $idenseignant =   rand(1,4);
   	 //echo $idenseignant;

   	 $pro =DB::select("select * from enseignants where idenseignant =".$idenseignant);
     $nbprojet = DB:: select("select count(idprojet) from affectation where idenseignant=".$idenseignant );
     $var = DB::insert("insert into affectation (idprojet, idenseignant) values ($req->id, $idenseignant)");
     //return view ('test1',compact('pro'));
       return redirect()->back();



   }

   function showEncad()
   {
   
    $data= DB::select('select projet.sujet, t1.nometudiant as e1, t1.prenometudiant as p1, t2.nometudiant as e2, t2.prenometudiant as p2, enseignants.nomenseignant, enseignants.prenomenseignant from affectation, projet, enseignants, etudiants as t1, etudiants as t2 where affectation.idprojet=projet.idprojet and affectation.idenseignant=enseignants.idenseignant and projet.idetudiant1=t1.idetudiant and projet.idetudiant2= t2.idetudiant ');
    
   	return view ('listeEncadrement',compact('data'));
   }

    function showEncadAdmin()
   {
   
    $data= DB::select('select projet.sujet, t1.nometudiant as e1, t1.prenometudiant as p1, t2.nometudiant as e2, t2.prenometudiant as p2, enseignants.nomenseignant, enseignants.prenomenseignant from affectation, projet, enseignants, etudiants as t1, etudiants as t2 where affectation.idprojet=projet.idprojet and affectation.idenseignant=enseignants.idenseignant and projet.idetudiant1=t1.idetudiant and projet.idetudiant2= t2.idetudiant ');
    //$var= DB::select("select t1.");
    
    return view ('listeencadAdmin',compact('data'));
   }

    function parametrePV(Request $req){
    
    return view('PV',['req1'=>$req]);
  }


   
}
