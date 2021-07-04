<?php

namespace App\Http\Controllers;

use App\Models\departement;
use App\Models\filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\administrateur;
use App\Models\etudiant;
use App\Models\encadrantentreprise;
use App\Models\enseignant;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\str;
use function PHPUnit\Framework\isNull;

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
   $administrateur = administrateur::where('email',$req->login)->where('password',md5($req->pwd))->first();
   // var_dump ('$administrateur => ', md5($req->pwd), $req->login, $administrateur,    !isNull($administrateur ));
	if( $administrateur){
        return view('index', [
            'countFilieres' => count(filiere::all()),
            'countDeparts' => count(departement::all()),
            'countEnseignants' => count(enseignant::all()),
            'countEtudiants' =>  count(etudiant::all()),
            'administrateur' => $administrateur,
        ]);
	} else {
		$etudiant =  etudiant::where('email',$req->login)->where('password',md5($req->pwd))->count();
		if( $etudiant ){
            session(['nom'=>$etudiant->nometudiant]);
            session(['prenom'=>$etudiant->prenometudiant]);
            session(['photo'=>$etudiant->photo]);
            session(['numinscrit'=>$etudiant->numinscrit]);
            session(['CIN'=>$etudiant->CIN]);
            session(['filiere'=>$etudiant->filiere]);
            session(['niveau'=>$etudiant->niveau]);
            session(['email'=>$etudiant->email]);
            session(['nomenseignant'=>$etudiant->nomenseignant]);
            session(['prenomenseignant'=>$etudiant->prenomenseignant]);
            session(['numtel'=>$etudiant->numtel]);
            return view ('indexEtudiant');
        } else {
            $encadrantentreprise = encadrantentreprise::where('email', $req->login)->where('password', md5($req->pwd))->first();
            if ($encadrantentreprise) {
                session(['nom' => $encadrantentreprise->nomEncad]);
                session(['prenom' => $encadrantentreprise->prenomEncad]);
                session(['photo' => $encadrantentreprise->photo]);
                session(['email' => $encadrantentreprise->email]);

                return view('indexEncadrantEntreprise');
            } else {
                $enseignant = enseignant::where('email', $req->login)->where('password', md5($req->pwd))->first();
                if ( $enseignant) {
                    session(['nom' => $enseignant->nomenseignant]);
                    session(['prenom' => $enseignant->prenomenseignant]);
                    session(['photo' => $enseignant->photo]);
                    session(['id' => $enseignant->idenseignant]);
                    return view('indexEncadrantAca');
                }
            }
        }
	return view('login2');
  }
}



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


