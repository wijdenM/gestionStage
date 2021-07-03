<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\entreprise;
use Illuminate\Support\Facades\DB;
use App\Models\encadrantentreprise;

class entrepriseController extends Controller
{
   function showentreprise()
   {
   	$data= entreprise::all();

    return view ('listeentreprise',['entreprise'=>$data]);
   }

   function show1(Request $req)
   {
//$data= entreprise::where('identreprise',$req->id)->get();
   // $data= DB::table('encadrantentreprises')->join('entreprises','entreprises.identreprise','=','encadrantentreprises.identreprise')->where('identreprise',$id)->get();
 
   //$data = json_decode($data,true);
    $data= entreprise::where('identreprise',$req->id)->get();
      $e= encadrantentreprise::where('identreprise',$req->id)->get();
    return view ('modifierentreprise',compact('data','e'));
   }

     function Update(Request $req)
{

  $data=entreprise::where('identreprise',$req->id)->first();
  $data->identreprise=$req->id;
  $data->raisonsocial=$req->RS;
  $data->activite=$req->act;
  $data->localisation=$req->local;
  //$data->numtel=$req->numtel;
  $data->photo=$req->photo;
  //$data->email=$req->email;
  $data->save();
  return redirect('listeentreprise');
}

 function UpdateEt(Request $req)
{
  $data=entreprise::where('identreprise',$req->id)->first();
  $data->identreprise=$req->id;
  $data->raisonsocial=$req->RS;
  $data->activite=$req->act;
  $data->localisation=$req->local;
  //$data->numtel=$req->numtel;
  $data->photo=$req->photo;
  //$data->email=$req->email;
  $data->save();
  return redirect('detailEntreprise');
}

 function save(request  $req){
   	print_r($req->nom);
   	$entreprise= new entreprise;
    $entreprise->raisonsocial= $req->RS;
   	$entreprise->activite= $req->act;
   	$entreprise->localisation= $req->local;
    
    $entreprise->photo= $req->img;
   	
   	echo($entreprise->save());
   	$entreprise=entreprise::all();
    return view ('ajoutEok');
   	//return view('listeentreprise')->with('entreprise',$entreprise);
}

function desactiverEntreprise(Request $req)
{
  $data=entreprise::where('identreprise',$req->id)->first();
  $data->etat="désactiver";
  $data->save();
  return redirect('listeentreprise');
}


function activerEntreprise(Request $req)
{
  $data = entreprise::where('identreprise',$req->id)->first();
  $data->etat="activer";
  $data->save();
  return redirect('listeentreprise');
}



}
