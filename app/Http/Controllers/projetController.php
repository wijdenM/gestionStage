<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\projet;
use App\Models\etudiant;
use App\Models\enseignant;
use App\Models\affectation;
class projetController extends Controller
{
    function showprojet()
   {
    $pro =DB::select("select projet.idprojet, projet.sujet, t1.nometudiant as et1, t2.nometudiant as et2, t1.prenometudiant as pt1, t2.prenometudiant as pt2 from projet, etudiants as t1, etudiants as t2, filiere where projet.anneeUni='2020/2021' and filiere.idfiliere='1' and projet.idetudiant1=t1.idetudiant and projet.idetudiant2=t2.idetudiant  ");
    
    $data= DB::select("select * from enseignants where enseignants.iddepartement='1'");
     $var = DB::select("select * from enseignants, affectation where affectation.idenseignant=enseignants.idenseignant");
    
      return view ('test',['e'=>$data,'pro'=>$pro,'var'=>$var]);


   
   }

   function showprojetEco()
   {
    $pro =DB::select("select projet.idprojet, projet.sujet, t1.nometudiant as et1, t2.nometudiant as et2, t1.prenometudiant as pt1, t2.prenometudiant as pt2 from projet, etudiants as t1, etudiants as t2, filiere where projet.anneeUni='2020/2021' and filiere.idfiliere='2' and projet.idetudiant1=t1.idetudiant and projet.idetudiant2=t2.idetudiant  ");
    
    $data= DB::select("select * from enseignants where enseignants.iddepartement='2'");
    
    
      return view ('testEco',['e'=>$data,'pro'=>$pro,]);


   
   }

 

    function showprojetGestion()
   {
    $pro =DB::select("select projet.idprojet, projet.sujet, t1.nometudiant as et1, t2.nometudiant as et2, t1.prenometudiant as pt1, t2.prenometudiant as pt2 from projet, etudiants as t1, etudiants as t2, filiere where projet.anneeUni='2020/2021' and filiere.idfiliere='3' and projet.idetudiant1=t1.idetudiant and projet.idetudiant2=t2.idetudiant  ");
    
    $data= DB::select("select * from enseignants where enseignants.iddepartement='3'");
    
    
      return view ('testEco',['e'=>$data,'pro'=>$pro,]);


   
   }

    function showprojett()
   {
    $pro =DB::select("select projet.idprojet ,projet.sujet,et.nometudiant as net1,ett.nometudiant as net2 ,et.prenometudiant as pet1, ett.prenometudiant as pet2 from projet, filiere, etudiants as et,etudiants as ett where projet.anneeUni='2020/2021'  and filiere.idfiliere='1' and projet.idetudiant1=et.idetudiant and projet.idetudiant2=ett.idetudiant");
    //return $pro;
   $data= DB::select("select * from enseignants where enseignants.iddepartement='1'");

      //$data= DB::table('departement')->join('enseignants','enseignants.iddepartement','=','departement.iddepartement')->get();
    //$data = json_decode($data,true);
      return view ('testMaster',['e'=>$data,'pro'=>$pro]);


    //return view ('test',compact('pro'));
   }




  function projetEncad()
  {
    $id=session('id');
    $data= DB::select("select projet.idprojet, projet.sujet, et1.nometudiant as net1, et1.prenometudiant as pet1, et2.nometudiant as net2, et2.prenometudiant as pet2  from projet, affectation, etudiants as et1, etudiants as et2 where affectation.idenseignant='$id' and affectation.idprojet=projet.idprojet and et1.idetudiant= projet.idetudiant1 and et2.idetudiant=projet.idetudiant2 "); 
    return view ('autoriserDepot',compact('data'));
  }

public function autoOK(Request $req)
{
 
 // $data= projet::where('idprojet',$req->id)->get();
  $var = DB::update("update projet set etat = 1 where idprojet= $req->id");
   return view ('aa');
  
}

function showAuto()
{
  $data = DB::select("select projet.idprojet, projet.sujet, et1.nometudiant as net1, et2.nometudiant as net2 from projet, etudiants as et1, etudiants as et2, affectation where affectation.idprojet= projet.idprojet and projet.etat = 1 ");
  $j = DB:: select("select * from enseignants where enseignants.encadre= 1  ");
  return view ('listeEtudiant2', ['data'=>$data,'j'=>$j]);
}





}
