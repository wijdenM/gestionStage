<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;
use App\Models\entreprise;
use App\Models\encadrantentreprise;
use Excel;
use App\Imports\etudiantImport;
use Illuminate\Support\Facades\DB;


class etudiantController extends Controller
{
    function save(request  $req){
   	print_r($req->nom);
   	$etudiant= new etudiant;
    $etudiant->CIN= $req->cin;
    $etudiant->numinscrit= $req->inscrit;
   	$etudiant->nometudiant= $req->nom;
   	$etudiant->prenometudiant= $req->pnom;
   	$etudiant->idfiliere= $req->filiere;
    $etudiant->niveau= $req->niveau;
    $etudiant->etat= $req->etat;
    $etudiant->photo= $req->img;
   	$etudiant->email= $req->email;
   	$etudiant->password= md5($req->pwd);
   	echo($etudiant->save());
      $etudiant=etudiant::all();
      return view ('ajoutEtok');
    //return view('listeetudiant')->with('etudiant',$etudiant);
   }



  function show()
   {
    $data= etudiant::all();
    $data= DB::table('filiere')->join('etudiants','etudiants.idfiliere','=','filiere.idfiliere')->get();
    //$data= DB::select("select * from etudiants,filier where etudiants.idfiliere= filiere.idfiliere and filiere = 'informatique de gestion' and niveau = '1ère Licence'");
    $data = json_decode($data,true);
    return view ('listeetudiant',['etudiant'=>$data]);
   }

    function showaff()
   {
    $data= etudiant::all();
     $data= DB::table('filiere')->join('etudiants','etudiants.idfiliere','=','filiere.idfiliere')->get();
    $data = json_decode($data,true);
    return view ('affectationEncad',['etudiant'=>$data]);
   }

  function parametre(Request $req){
    return view('demandestage2',['req'=>$req]);
  }
  function parametreaff(Request $req){
    return view('lettreaff2',['req'=>$req]);
  }

  function consulterprofiletudiant()
   {
    $x= session('id') ;
    $data= etudiant::where('idetudiant',$x)->get();
    
    return view ('Profiletudient',compact('data'));
   }
    function show4(Request $req)
   {
    $data= etudiant::where('idetudiant',$req->id)->get();
    //return view ('listeadmin',['administrateur'=>$data]);
    return view ('modifieretudiant',compact('data'));
   }

   function verifaffectation(request $req){
    $data= DB::select("select * from etudiants,affectation,projet,enseignants where  and affectation.idprojet=projet.idprojet and affectation.idenseignant= enseignants.idenseignant");
  $count =  etudiant::where('email',$req->login)->where('password',$req->pwd)->count();
  
  foreach($data as $i){
  $sujet=$i->sujet;
$nomenseignant=$i->nomenseignant;
$prenomenseignant=$i->prenomenseignant;
$numtel=$i->numtel;
$email=$i->email;

}
     
  if ($count == 1){
    session(['nomenseignant'=>$nomenseignant]);
    session(['prenomenseignant'=>$prenomenseignant]);
    session(['numtel'=>$numtel]);
    session(['email'=>$email]);


    return view ('lettreAffectation');
  }
  


}
   function UpdateEtudiant(Request $req)
{
  $data=etudiant::where('idetudiant',$req->id)->first();
  $data->CIN=$req->cin;
  $data->numinscrit=$req->incrit;
  $data->nometudiant=$req->nom;
  $data->prenometudiant=$req->pnom;
  $data->idfiliere=$req->filiere;
  $data->niveau=$req->niveau;
  $data->photo=$req->photo;
  $data->email=$req->email;
  $data->save();
  
  return redirect('listeetudiant');
}

function desactiverEtudiant(Request $req)
{
  $data=etudiant::where('idetudiant',$req->id)->first();
  $data->etat="désactiver";
  $data->save();
  return redirect('listeetudiant');
}


function activerEtudiant(Request $req)
{
  $data = etudiant::where('idetudiant',$req->id)->first();
  $data->etat="activer";
  $data->save();
  return redirect('listeetudiant');
}

 public function fileImportExport()
    {
       return view('file-import');
    }

public function fileImport(Request $request) 
    {
        Excel::import(new etudiantImport, $request->file('file')->store('temp'));
        return view('succes');
    }

    function changer_passET(Request $req)
    {
        $code = str::random(8);
        $user = etudiant::where('email', $req->email)->first();
        if ($user) {
            $user->password =  $code;
            $user->save();
            session(['code' => $code]);
            $details = [
                'title' => 'Title: code de changement de mot de base',
                'body' => 'body',
            ];
            Mail::to($user['email'])->send(new \App\Mail\SendMail($details));
            session()->forget(['code']);
            return view ('login');
        }else{
          return view('login');
        }
    }


   function showET()
   {
    $data= entreprise::all();

    return view ('EntrepriseEt',['entreprise'=>$data]);
   }

   function showDE(Request $req)
   {
//$data= entreprise::where('identreprise',$req->id)->get();
   // $data= DB::table('encadrantentreprises')->join('entreprises','entreprises.identreprise','=','encadrantentreprises.identreprise')->where('identreprise',$id)->get();
 
   //$data = json_decode($data,true);
    $data= entreprise::where('identreprise',$req->id)->get();
      $e= encadrantentreprise::where('identreprise',$req->id)->get();
    return view ('detailEntreprise',compact('data','e'));
   }



}
