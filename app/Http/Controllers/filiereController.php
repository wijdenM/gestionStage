<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filiere;
use DB;

class filiereController extends Controller
{
       function showfiliere()
   {
   	$data= filiere::all();
    
   	return view ('listefiliere',['data'=>$data]);
   }

   function savefiliere(request  $req){
  	$filiere= new filiere;
    $filiere->filiere= $req->nom;
   	
   	echo($filiere->save());
   	$filiere=filiere::all();

    return redirect()->back();}

    public function destroyF($id) {
    	
     DB::delete('delete from filiere where idfiliere = ?',[$id]);
    
       return redirect()->back();
    }

}
