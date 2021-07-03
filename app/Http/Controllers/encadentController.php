<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\encadrantentreprise;
use Illuminate\Support\Facades\Hash;

class encadentController extends Controller
{
      function save(request  $req){
   	print_r($req->nom);
   	$encadrantentreprise= new encadrantentreprise;
   	$encadrantentreprise->nomEncad= $req->nom;
   	$encadrantentreprise->prenomEncad= $req->pnom;
    $encadrantentreprise->identreprise= $req->ident;
      $encadrantentreprise->numtel= $req->numtel;
      $encadrantentreprise->photo= $req->img;
   	$encadrantentreprise->email= $req->email;
    $encadrantentreprise->etat=$req->etat;
   	$encadrantentreprise->password= Hash::make($req->pwd);
   	echo($encadrantentreprise->save());
      $encadrent=encadrantentreprise::all();
      return view('EncadrantEntreprise');
}

function modifprofilEE()
   {
    $x= session('id') ;
    $data= encadrantentreprise::where('idencad',$x)->get();
    
    return view ('ProfilEE',compact('data'));
   }
function show()
   {
   	$data= encadrantentreprise::all();
   	return view ('listeencadrent',['encadrantentreprise'=>$data]);
   }

   function show2(Request $req)
   {
    $data= encadrantentreprise::where('idencad',$req->id)->get();
    //return view ('listeadmin',['administrateur'=>$data]);
    return view ('modifierEE',compact('data'));
   }

   function verif(request $req){
   $count = encadrantentreprise::where('email',$req->login)->where('password',$req->pwd)->count();
   $data = encadrantentreprise::where('email',$req->login)->where('password',$req->pwd)->get();
   foreach($data as $i){
   $nom=$i->nomEncad;
$prenom=$i->prenomEncad;}
     
   if ($count == 1){
      session(['nom'=>$nom]);
      session(['prenom'=>$prenom]);

      return view ('indexEncadrantEntreprise');
   }
   else 
      return view('login2');


}
   function UpdateEE(Request $req)
{
  $data=encadrantentreprise::where('idencad',$req->id)->first();
  $data->nomEncad=$req->nom;
  $data->prenomEncad=$req->pnom;
  $data->societe=$req->societe;
  $data->numtel=$req->numtel;
  $data->photo=$req->photo;
  $data->email=$req->email;
  $data->save();
  return redirect('listeencadrent');
}

}
