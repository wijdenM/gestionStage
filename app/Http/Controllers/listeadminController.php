<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\administrateur;

class listeadminController extends Controller
{
   function show()
   {
   	$data= administrateur::all();
    $data= DB::table('post')->join('administrateurs','administrateurs.idpost','=','post.idpost')->get();
    $data = json_decode($data,true);
   	return view ('listeadmin',['administrateur'=>$data]);
   }

   function show1(Request $req)
   {
    $data= administrateur::where('idadmin',$req->id)->get();
    //return view ('listeadmin',['administrateur'=>$data]);
    return view ('modifieradmin',compact('data'));
   }
   
  
   


   function Update(Request $req)
{
  $data=administrateur::where('idadmin',$req->id)->first();
  $data->CIN=$req->cin;
  $data->nomadmin=$req->nom;
  $data->prenomadmin=$req->pnom;
  $data->idpost=$req->post;
  $data->numtel=$req->numtel;
  $data->photo=$req->photo;
  $data->email=$req->email;
  $data->save();
  return redirect('listeadmin');
}


function desactiver(Request $req)
{
  $data=administrateur::where('idadmin',$req->id)->first();
  $data->etat="désactiver";
  $data->save();
  return redirect('listeadmin');
}


function activer(Request $req)
{
  $data=administrateur::where('idadmin',$req->id)->first();
  $data->etat="activer";
  $data->save();
  return redirect('listeadmin');
}
}
