f<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\messagerie;
use App\Models\administrateur;
use App\Models\encadrantentreprise;
use App\Models\etudiant;
use Illuminate\Support\Facades\DB;


class messagerieController extends Controller
{
    function save(Request $req)
    {	
    $messagerie= new messagerie;
    
    $messagerie->MailDest= $req->dest;
   	$messagerie->MailExp= $req->expd;
   	$messagerie->objet= $req->objet;
   	$messagerie->message= $req->msg;
   	$messagerie->date= $req->date;
   	$messagerie->etat= 1;
   	echo($messagerie->save());
    $messagerie=messagerie::all();
    return view('ok');
   	

    }
//administrateur
    function show()
   {
   	 $mail = session('email');
   	 $data= DB::select("select * from messagerie where MailDest='$mail' "); 
    
   	return view ('mailbox-folder',compact('data'));
   }

   function recup(Request $req)
   {

   	$mail= session('email');
	$data = DB::select ("select * FROM 'messagerie' where etat='1' and MailDest=$mail");
	return view ('index',compact('data'));											
						
   }

   function showEnvoiyer()
   {
   	 $mail = session('email');
   	 $data= DB::select("select * from messagerie where MailExp='$mail' "); 
    
   	return view ('mailbox-folderE',compact('data'));
   }

   function showMsg(Request $req)
   {
    $data= messagerie::where('idmessage',$req->id)->get();
  	$var = DB::update("update messagerie set etat = 0 where idmessage= $req->id");
    return view ('mailbox-msg',compact('data'));
   }

    function showMsgEnvoyer(Request $req)
   {
    $data= messagerie::where('idmessage',$req->id)->get();
  
    return view ('mailbox-msgEnvoyer',compact('data'));
   }


//etudiant
     function showEnvoiyerE()
   {
   	 $mail = session('email');
   	 $data= DB::select("select * from messagerie where MailExp='$mail' "); 
    
   	return view ('mailbox-folderEtudiantE',compact('data'));
   }

   function showMsgE(Request $req)
   {
    $data= messagerie::where('idmessage',$req->id)->get();
    $var = DB::update("update messagerie set etat = 0 where idmessage= $req->id");
  
    return view ('mailbox-msgEtudiant',compact('data'));
   }


    function showE()
   {
   	 $mail = session('email');
   	 $data= DB::select("select * from messagerie where MailDest='$mail' "); 

    
   	return view ('mailbox-folderEtudiant',compact('data'));
   }

    function showMsgEnvoyerEtudiant(Request $req)
   {
    $data= messagerie::where('idmessage',$req->id)->get();
  
    return view ('mailbox-msgEtudiantE',compact('data'));
   }

   //encadrant entreprise

     function showEnvoiyerEncadrantE()
   {
   	 $mail = session('email');
   	 $data= DB::select("select * from messagerie where MailExp='$mail' "); 
    
   	return view ('mailbox-folderEEenvoyer',compact('data'));
   }

   function showMsgEE(Request $req)
   {
    $data= messagerie::where('idmessage',$req->id)->get();
  
    return view ('mailbox-msgEtudiant',compact('data'));
   }

    function showEE()
   {
   	 $mail = session('email');
   	 $data= DB::select("select * from messagerie where MailDest='$mail' "); 
    
   	return view ('mailbox-folderEE',compact('data'));
   }

    function showMsgEEenvoyer(Request $req)
   {
    $data= messagerie::where('idmessage',$req->id)->get();
  
    return view ('mailbox-msgEtudiantE',compact('data'));
   }

}
