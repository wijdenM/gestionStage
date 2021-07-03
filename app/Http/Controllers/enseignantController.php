<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\enseignant;
use App\Imports\enseignantImport;
use Excel;

class enseignantController extends Controller
{
  //ajouter enseignant
   function save(request  $req){
   	print_r($req->nom);
   	$enseignant= new enseignant;
    $enseignant->numCNSS= $req->cnss;
   	$enseignant->nomenseignant= $req->nom;
   	$enseignant->prenomenseignant= $req->pnom;
    $enseignant->grade= $req->grade;
   	$enseignant->iddepartement= $req->depart;
    $enseignant->etat= $req->etat;
    $enseignant->numtel= $req->numtel;
    $enseignant->photo= $req->img;
   	$enseignant->email= $req->email;
   	$enseignant->password= $req->pwd;


   	echo($enseignant->save());
      $enseignant=enseignant::all();
  
      return view ('ajoutEnok');
   }


   //afficher liste enseignant
   function show()
   {
      $data= enseignant::all();

      
    $data= DB::table('departement')->join('enseignants','enseignants.iddepartement','=','departement.iddepartement')->get();
    $data = json_decode($data,true);
      return view ('listeenseignant',['enseignant'=>$data]);
   }
   

   //afficher detail enseignant

    function show3(Request $req)
   {
    $data= enseignant::where('idenseignant',$req->id)->get();
    //return view ('listeadmin',['administrateur'=>$data]);
    return view ('modifierenseignant',compact('data'));
   }
   
   

    function verif(request $req){
   $count = enseignant::where('email',$req->login)->where('password',$req->pwd)->count();
   $data = enseignant::where('email',$req->login)->where('password',$req->pwd)->get();
   foreach($data as $i){
   $nom=$i->nomenseignant;
$prenom=$i->prenomenseignant;}
     
   if ($count == 1){
      session(['nom'=>$nom]);
      session(['prenom'=>$prenom]);

      return view ('indexEncadrantAca');
   }
   else 
      return view('login2');


}

//modifier enseignant
 function UpdateEN(Request $req)
{
  $data=enseignant::where('idenseignant',$req->id)->first();
  $data->numCNSS=$req->cnss;
  $data->nomenseignant=$req->nom;
  $data->prenomenseignant=$req->pnom;
  $data->grade=$req->grade;
  $data->iddepartement=$req->Departement;
  $data->numtel=$req->numtel;
  $data->photo=$req->photo;
  $data->email=$req->email;
  $data->save();
  return redirect('listeenseignant');
}

//modification d'état (active/desactive)
function desactiverEnseignant(Request $req)
{
  $data=enseignant::where('idenseignant',$req->id)->first();
  $data->etat="désactiver";
  $data->save();
  return redirect('listeenseignant');
}


function activerEnseignant(Request $req)
{
  $data = enseignant::where('idenseignant',$req->id)->first();
  $data->etat="activer";
  $data->save();
  return redirect('listeenseignant');
}

//importer fichier excel
public function fileImportEnseignantinterface()
    {
       return view('fienseignant');
    }
public function fileImportEnseignant(Request $request) 
    {
        Excel::import(new enseignantImport, $request->file('file')->store('temp'));
        return view('successs');
    }
}
