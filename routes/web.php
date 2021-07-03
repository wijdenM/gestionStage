<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listeadminController;
use App\Http\Controllers\encadentController;
use App\Http\Controllers\administrateurAuth;
use App\Http\Controllers\administrateurController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('EntrepriseEt', function () {
    return view('EntrepriseEt');
});


Route::get('/index', function () {
    return view('index');
});
Route::get('/indexEtudiant', function () {
    return view('indexEtudiant');
});
Route::get('/indexChefDepart', function () {
    return view('indexChefDepart');
});
Route::get('/indexEncadrantEntreprise', function () {
    return view('indexEncadrantEntreprise');
});
Route::get('/indexEncadrantAca', function () {
    return view('indexEncadrantAca');
});
Route::get('/indexJury', function () {
    return view('indexJury');
});
Route::get('/Enseignant', function () {
    return view('Enseignant');

});
Route::get('/demandeStage', function () {
    return view('demandeStage');

});
Route::get('/ficheEvaluation', function () {
    return view('ficheEvaluation');

});
Route::get('/PV', function () {
    return view('PV');

});

Route::get('/PVV', function () {
    return view('PVV');

});
Route::get('/remerciment', function () {
    return view('remerciment');

});
Route::get('/pages-recover-password', function () {
    return view('pages-recover-password');

});



Route::get('/lettreAffectation', function () {
    return view('lettreAffectation');

});
Route::get('/autoriserDepot', function () {
    return view('autoriserDepot');

});
Route::get('/Etudiant', function () {
    return view('Etudiant');

});
Route::get('/administrateur', function () {
    return view('administrateur');

});
Route::get('/entreprise', function () {
    return view('entreprise');

});
Route::get('/EncadrantEntreprise', function () {
    return view('EncadrantEntreprise');

});
Route::get('/login2', function () {
    return view('login2');

});
Route::get('/listestagiaire', function () {
    return view('listestagiaire');

});
Route::get('/eval2', function () {
    return view('eval2');

});

Route::get('/autoDepot', function () {
    return view('autoDepot');

});

Route::get('/autorisationDepot2', function () {
    return view('autorisationDepot2');

});


Route::get('/listeadmin', function () {
    return view('listeadmin');


});
Route::get('/listeencadrent', function () {
    return view('listeencadrent');


});
Route::get('/mailbox-folder', function () {
    return view('mailbox-folder');


});
Route::get('/mailbox-compose', function () {
    return view('mailbox-compose');


});
Route::get('/modifieradmin2', function () {
    return view('modifieradmin2');


});
Route::get('/modifier', function () {
    return view('modifier');


});
Route::get('/listeA0', function () {
    return view('listeA0');


});
Route::get('/tables-editable', function () {
    return view('tables-editable');


});
Route::get('/listesociete', function () {
    return view('listesociete');


});
Route::get('/modifierProfil', function () {
    return view('modifierProfil');


});

Route::get('/registrer', function () {
    return view('registrer');


});
Route::get('/Profiletudient', function () {
    return view('Profiletudient');


});
Route::get('/message', function () {
    return view('message-google');


});
Route::get('/affectationEncad', function () {
    return view('affectationEncad');


});


Route::get('/PV2', function () {
    return view('PV2');


});
Route::get('/registre', function () {
    return view('registre');


});


Route::post('/demandeStage2', 'App\Http\Controllers\etudiantController@parametre');
Route::post('/lettreaff2', 'App\Http\Controllers\etudiantController@parametreaff');
Route::post('/PV', 'App\Http\Controllers\affectationController@parametrePV');
Route::post('/test1', 'App\Http\Controllers\affectationController@affecter');
//Route::get('/index', 'App\Http\Controllers\administrateurController@getEtud');
Route::get('/listeDepart', 'App\Http\Controllers\departementController@showDepart');
Route::get('/listefiliere', 'App\Http\Controllers\filiereController@showfiliere');






Route::get('/lettreaff2', function () {
    return view('lettreaff2');


});
Route::get('/impression', function () {
    return view('impression');


});
Route::get('/ficheeval', function () {
    return view('ficheeval');


});

Route::get('/hash', function () {
    return view('hash');


});

Route::get('/listeToutEtudiant', function () {
    return view('listeToutEtudiant');


});

Route::get('/mailbox-msg', function () {
    return view('mailbox-msg');


});

Route::get('/ok', function () {
    return view('ok');


});

Route::get('/mailbox-folderEtudiant', function () {
    return view('mailbox-folderEtudiant');


});

Route::get('/autoriserSucces', function () {
    return view('autoriserSucces');


});
Route::get('/departement', function () {
    return view('departement');


});
Route::get('/okDepart', function () {
    return view('okDepart');


});
Route::get('/filiere', function () {
    return view('filiere');


});
Route::get('/aa', 'App\Http\Controllers\projetController@autoOK');
Route::get('/listeEtudiant2', 'App\Http\Controllers\projetController@showAuto');
//Route::get('/listeEtudiant2', 'App\Http\Controllers\projetController@showJury');


Route::get('/listeenseignant', function () {
    return view('listeenseignant');});

Route::get('/autoriserDepot', 'App\Http\Controllers\projetController@projetEncad');
Route::get('/autoriserSucces', 'App\Http\Controllers\projetController@autoOK');


Route::get('/listeadmin', [listeadminController::class,'show']);


Route::post('/forget', 'App\Http\Controllers\administrateurController@changer_pass');

Route::get('delete/{id}','App\Http\Controllers\departementController@destroy');
Route::get('delete/{id}','App\Http\Controllers\filiereController@destroyF');



Route::get('/listeencadrent', 'App\Http\Controllers\encadentController@show');
Route::get('/test', 'App\Http\Controllers\projetController@showprojet');
Route::get('/testEco', 'App\Http\Controllers\projetController@showprojetEco');
Route::get('/testGestion', 'App\Http\Controllers\projetController@showprojetGestion');

//Route::get('/testMaster', 'App\Http\Controllers\projetController@showprojett');
Route::get('/listeentreprise', 'App\Http\Controllers\entrepriseController@showentreprise');
Route::get('/EntrepriseEt', 'App\Http\Controllers\etudiantController@showET');

Route::get('/listesociete', 'App\Http\Controllers\societeController@show');
Route::get('/search','App\Http\Controllers\administrateurController@search');
Route::get('/listeenseignant', 'App\Http\Controllers\enseignantController@show');
Route::get('/listencadrent', 'App\Http\Controllers\encadentController@show');
Route::get('/listeetudiant', 'App\Http\Controllers\etudiantController@show');
Route::get('/affectationEncad', 'App\Http\Controllers\etudiantController@showaff');
Route::get('/modifieradmin', 'App\Http\Controllers\listeadminController@show1');

Route::get('/detailEntreprise', 'App\Http\Controllers\etudiantController@showDE');
Route::get('/modifierEE', 'App\Http\Controllers\encadentController@show2');
Route::get('/modifierenseignant', 'App\Http\Controllers\enseignantController@show3');
Route::get('/modifieretudiant', 'App\Http\Controllers\etudiantController@show4');
Route::get('/modifierProfil', 'App\Http\Controllers\administrateurController@consulterprofilAdmin');
Route::post('/modifierProfil', 'App\Http\Controllers\administrateurController@UpdateProfile');
Route::get('/Profiletudient', 'App\Http\Controllers\etudiantController@consulterprofiletudiant');
Route::get('/ProfilEE', 'App\Http\Controllers\encadentController@modifprofilEE');

Route::post('/modifieradmin','App\Http\Controllers\listeadminController@Update');
Route::get('/listeEncadrement', 'App\Http\Controllers\affectationController@showEncad');
Route::get('/listeencadAdmin', 'App\Http\Controllers\affectationController@showEncadAdmin');








Route::post('/desactiver','App\Http\Controllers\listeadminController@desactiver');
Route::post('/activer','App\Http\Controllers\listeadminController@activer');
Route::post('/desactiverEnseignant','App\Http\Controllers\enseignantController@desactiverEnseignant');
Route::post('/activerEnseignant','App\Http\Controllers\enseignantController@activerEnseignant');
Route::post('/desactiverEtudiant','App\Http\Controllers\etudiantController@desactiverEtudiant');
Route::post('/activerEtudiant','App\Http\Controllers\etudiantController@activerEtudiant');
Route::post('/desactiverEntreprise','App\Http\Controllers\entrepriseController@desactiverEntreprise');
Route::post('/activerEntreprise','App\Http\Controllers\entrepriseController@activerEntreprise');












Route::get('/modifierentreprise', 'App\Http\Controllers\entrepriseController@show1');
Route::post('/modifierentreprise2', 'App\Http\Controllers\entrepriseController@Update');

//espace etudiant
Route::post('/detailEntreprise', 'App\Http\Controllers\entrepriseController@UpdateEt');










Route::post('/Profiletudient','App\Http\Controllers\etudiantController@UpdateEt');
Route::post('/modifieretudiant','App\Http\Controllers\etudiantController@UpdateEtudiant');
Route::post('/modifierEE','App\Http\Controllers\encadentController@UpdateEE');
Route::post('/modifierenseignant','App\Http\Controllers\enseignantController@UpdateEN');
//Route::post('/lettreAffectation','App\Http\Controllers\etudiantController@verifaffectation');


Route::post('/index','App\Http\Controllers\administrateurController@verif');
Route::post('/ajoutenseignant','App\Http\Controllers\enseignantController@save');
Route::post('/ajoutetudiant','App\Http\Controllers\etudiantController@save');
Route::post('/ajoutadministrateur','App\Http\Controllers\administrateurController@save');
Route::post('/ajoutDepart','App\Http\Controllers\departementController@saveDepart');
Route::post('/ajoutFiliere','App\Http\Controllers\filiereController@savefiliere');
Route::post('/ajoutentreprise','App\Http\Controllers\entrepriseController@save');
Route::post('/ajoutencadrantentreprise','App\Http\Controllers\encadentController@save'); 
Route::get("message", "App\Http\Controllers\MessageController@formMessageGoogle");
Route::post("message", "App\Http\Controllers\MessageController@sendMessageGoogle")->name('send.message.google');
Route::post('/ajoutmessage','App\Http\Controllers\messagerieController@save');
Route::post('/mailbox-composeEtudiant','App\Http\Controllers\messagerieController@save');
Route::get('/mailbox-folder', 'App\Http\Controllers\messagerieController@show');
Route::get('/mailbox-folderE', 'App\Http\Controllers\messagerieController@showEnvoiyer');
Route::get('/mailbox-msg', 'App\Http\Controllers\messagerieController@showMsg');
Route::get('/mailbox-msgEnvoyer', 'App\Http\Controllers\messagerieController@showMsgEnvoyer');
Route::get('/mailbox-msgEtudiant', 'App\Http\Controllers\messagerieController@showMsgE');
Route::get('/mailbox-folderEtudiant', 'App\Http\Controllers\messagerieController@showE');
Route::get('/mailbox-folderEtudiantE', 'App\Http\Controllers\messagerieController@showEnvoiyerE');
Route::get('/mailbox-msgEtudiantE', 'App\Http\Controllers\messagerieController@showMsgEnvoyerEtudiant');
Route::get('/mailbox-folderEE', 'App\Http\Controllers\messagerieController@showEE');
Route::get('/mailbox-folderEEenvoyer', 'App\Http\Controllers\messagerieController@showEnvoiyerEncadrantE');










//importation route
Route::get('file-import-export', 'App\Http\Controllers\etudiantController@fileImportExport');
Route::post('file-import', 'App\Http\Controllers\etudiantController@fileImport')->name('file-import');

/// enseignant



Route::get('/fienseignant', function () {
    return view('fienseignant');


});
Route::post('fienseignant','App\Http\Controllers\enseignantController@fileImportEnseignant' );


//
