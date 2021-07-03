<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\departement;
use DB;

class departementController extends Controller
{
     function showDepart()
   {
   	$data= departement::all();
    
   	return view ('listeDepart',['data'=>$data]);
   }

    function saveDepart(request  $req){
  	$departement= new departement;
    $departement->departement= $req->nom;
   	
   	echo($departement->save());
   	$departement=departement::all();

    return redirect()->back();}

    public function destroy($id) {
    	
     DB::delete('delete from departement where iddepartement = ?',[$id]);
    
       return redirect()->back();
    }

}
