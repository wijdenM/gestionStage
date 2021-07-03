<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\administrateur;
use App\Models\etudiant;
use App\Models\encadrantentreprise;
use App\Models\enseignant;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;

class administrateurController extends Controller
{
     function save(request  $req){
  	$administrateur= new administrateur;
    $administrateur->CIN= $req->cin;
   	$administrateur->nomadmin= $req->nom;
   	$administrateur->prenomadmin= $req->pnom;
   	$administrateur->idpost= $req->post;
    $administrateur->numtel= $req->numtel;
    $administrateur->etat=$req->etat;
    $administrateur->photo= $req->img;
   	$administrateur->email= $req->email;
   	$administrateur->password= md5($req->pwd);
   	echo($administrateur->save());
   	$administrateur=administrateur::all();

    return view ('ajoutok');

   	//return view('listeadmin')->with('administrateur',$administrateur );
}

function consulterprofilAdmin()
   {
    $x= session('id') ;
    $data= administrateur::where('idadmin',$x)->get();
    $data= DB::table('post')->join('administrateurs','administrateurs.idpost','=','post.idpost')->where('idadmin',$x)->get();
 
   $data = json_decode($data,true);
  return view ('modifierProfil',compact('data'));
   }

   function UpdateProfile(Request $req)
{
  $data=administrateur::where('idadmin',$req->id)->first();
  $data->nomadmin=$req->nom;
  $data->prenomadmin=$req->pnom;
  $data->idpost=$req->post;
  $data->numtel=$req->numtel;
  $data->email=$req->email;
 
  $data->photo=$req->photo;
  $data->password=$req->pw;
  $data->save();
    session(['nom'=>$req->nom]);
    session(['prenom'=>$req->pnom]);
     session(['photo'=>$req->photo]);
  return redirect('modifierProfil');
}



/*function search(Request $request)
{
  $search= $request->get('search');
  $administrateurs=DB::table('administrateurs')->where('nomadmin','like','%'.search.'%')->paginate(5);
  return view('listeadmin',['administrateurs' =>$administrateurs]);
}*/



function verif(request $req){
   $i=administrateur::where('email',$req->login)->where('password',md5($req->pwd))->first();
	$count =  administrateur::where('email',$req->login)->where('password',md5($req->pwd))->count();
	
	if($count> 0 ){
  $nom=$i->nomadmin;
  $prenom=$i->prenomadmin;
  $id=$i->idadmin;
  $photo=$i->photo;
  $email=$i->email;
     
	
		session(['nom'=>$nom]);
		session(['prenom'=>$prenom]);
    session(['id'=>$id]);
    session(['photo'=>$photo]);
    session(['email'=>$email]);

		return view ('index');
  }else 
    {
       $data= DB::select("select * from etudiants,filiere,affectation,projet,enseignants where etudiants.email='$req->login' and etudiants.password='$req->pwd' and etudiants.idfiliere= filiere.idfiliere and (etudiants.idetudiant=projet.idetudiant1) or (etudiants.idetudiant=projet.idetudiant2) and affectation.idprojet=projet.idprojet and affectation.idenseignant= enseignants.idenseignant");
          $i=etudiant::where('email',$req->login)->where('password',md5($req->pwd))->first();
		      $count =  etudiant::where('email',$req->login)->where('password',md5($req->pwd))->count();
        }
  //$data =  etudiant::where('email',$req->login)->where('password',$req->pwd)->get();
      if($count>0){
$nom=$i->nometudiant;
$prenom=$i->prenometudiant;
$photo=$i->photo;
$numinscrit=$i->numinscrit;
$CIN=$i->CIN;
$filiere=$i->filiere;
$niveau=$i->niveau;
$email=$i->email;
$nomenseignant=$i->nomenseignant;
$prenomenseignant=$i->prenomenseignant;
$numtel=$i->numtel;
    session(['nom'=>$nom]);
    session(['prenom'=>$prenom]);
    session(['photo'=>$photo]);
     session(['numinscrit'=>$numinscrit]);
    session(['CIN'=>$CIN]);
    session(['filiere'=>$filiere]);
    session(['niveau'=>$niveau]);
    session(['email'=>$email]);
     session(['nomenseignant'=>$nomenseignant]);
     session(['prenomenseignant'=>$prenomenseignant]);
    session(['numtel'=>$numtel]);

    return view ('indexEtudiant');
  }
  else {
     $i=encadrantentreprise::where('email',$req->login)->where('password',md5($req->pwd))->first();
  	$count = encadrantentreprise::where('email',$req->login)->where('password',md5($req->pwd))->count();
   //$data = encadrantentreprise::where('email',$req->login)->first();
    if($count>0){
  $nom=$i->nomEncad;
  $prenom=$i->prenomEncad;
  $photo=$i->photo;
  $email=$i->email;
     
  
      session(['nom'=>$nom]);
      session(['prenom'=>$prenom]);
      session(['photo'=>$photo]);
      session(['email'=>$email]);

      return view ('indexEncadrantEntreprise');
   }
   else {
    $i=enseignant::where('email',$req->login)->where('password',md5($req->pwd))->first();
   	$count = enseignant::where('email',$req->login)->where('password',md5($req->pwd))->count();
   if($count>0){
   $nom=$i->nomenseignant;
   $prenom=$i->prenomenseignant;
   $photo=$i->photo;
   $id=$i->idenseignant;
     
  
      session(['nom'=>$nom]);
      session(['prenom'=>$prenom]);
      session(['photo'=>$photo]);
      session(['id'=>$id]);

      return view ('indexEncadrantAca');
   }
   else 
      return view('login2');}}}



		function changer_pass(Request $req)
    {

        $code = str::random(8);
        $test=0;
        $user = Administrateur::where('email', $req->email)->first();
        if ($user) {
            $user->password = md5($code);  //$code;
            $user->save();
            session(['code' => $code]);
            $details = [
                'title' => 'Title: code de changement de mot de base',
                'body' => 'body',
            ];
            Mail::to($user['email'])->send(new \App\Mail\SendMail($details));
            session()->forget(['code']);
            $test=1;
            return view ('login');
        }

        $user = etudiant::where('email', $req->email)->first();
        if ($user) {
            $user->password =  md5($code);
            $user->save();
            session(['code' => $code]);
            $details = [
                'title' => 'Title: code de changement de mot de base',
                'body' => 'body',
            ];
            Mail::to($user['email'])->send(new \App\Mail\SendMail($details));
            session()->forget(['code']);
            $test=1;
            return view ('login');
        }

         $user = enseignant::where('email', $req->email)->first();
        if ($user) {
            $user->password =  md5($code);
            $user->save();
            session(['code' => $code]);
            $details = [
                'title' => 'Title: code de changement de mot de base',
                'body' => 'body',
            ];
            Mail::to($user['email'])->send(new \App\Mail\SendMail($details));
            session()->forget(['code']);
            $test=1;
            return view ('login');
        }

        $user = encadrantentreprise::where('email', $req->email)->first();
        if ($user) {
            $user->password =  md5($code);
            $user->save();
            session(['code' => $code]);
            $details = [
                'title' => 'Title: code de changement de mot de base',
                'body' => 'body',
            ];
            Mail::to($user['email'])->send(new \App\Mail\SendMail($details));
            session()->forget(['code']);
            $test=1;
            return view ('login');
        }

if(test == 0){
return view('login2');
}

        
    }

Public function getEtud()
    {
       $data= DB::table('etudiants')->get()->count();
       $data1= DB::table('enseignants')->get()->count();
       $data2= DB::table('departement')->get()->count();
       $data3= DB::table('filiere')->get()->count();
      
    return view ('index',compact('data','data1','data2','data3'));
    }



}


