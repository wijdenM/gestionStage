<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    

    <title></title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

</head>

<body class="p-5">
    <table>
        <tr>  
            <td >
        REPUBLIQUE TUNISIENNE <br>
        ********<br>
       MIISTERE DE L'ENSEIGNANT SUPERIEUR<br>
       ET LA RECHERCHE SCIENTIFIQUE<br>
       ********<br>
       UNIVERSITE DE SOUSSE<br>
       <strong>INSTITUT SUPERIEUR DE GESTION DE SOUSSE</strong></td>
      
      

       <td ><img src="images/mesrs.png" height=120px ></td>
        </tr>
    </table>

    
       <br>
       <?php
                                $date = new Date();
                                $an = $date->year;
                                $an1 = $an - 1;
                                $an2 = $date->day;
                                $an3 = $date->month;


                                ?>
       
       <h3 class="text-center"><strong>Demande de stage</strong></h3>
      
		   <h5  class="text-center" >année universitaire {{$an1}}/{{$an}} </h5>
        <br><h6  class="text-center">(L'étudiant doit remettre<strong> obligatoirement</strong> une copie au guichet)</h6>
        <br>Nous avons l'honneur de venir par la présente sollicité votre bienveillance un stage de formation pour l'étudiant(e): <strong>{{session('nom')}} {{session('prenom')}}</strong>
        <br>Au sein de votre honorable entreprise:&nbsp;<strong>{{$req->entreprise}}</strong><br>
	    L'étudiant(e) est titulaire de la CIN <strong>n°{{session('CIN')}}</strong> et de l'inscription <strong>{{session('numinscrit')}}</strong>    Il (elle) 
        inscrit(e) en <strong>{{session('niveau')}}&nbsp;{{session('filiere')}}</strong><br> Le stage de formation est d'une durée de <u>trois mois</u> de présence
         à compter du &nbsp;{{$req->dureStage}}   Ce stage est <strong>obligatoirement</strong> est s'inscrit dans 
         le cadre de l'obtention de son diplome de <strong><u>Licence</u></strong> Nous comptons 
         sur votre collaboration et l'interet que vous accordez à la qualité de la formation pour  
         l'insertion de nos jeunes étudiants dans le milieu professionnel. Si vous etrs  d'accord pour
          accueillir notre étudiant(e), nous vous sauriez gré de bien vouloir signer ce document  et le
          retourner à l'étudiant(e). Une lettre d'affectation qui organise les rapports entre l'étudiant 
           stagiaire, l'entreprise et l'institution sera signée ultérieurement. <br>Veuillez,Madame, Monsieur,
            accepter nos salutations les plus distinguées. <br><br>
            <table class="table table-bordered table-striped mb-none ">
                <thead>
                    <tr>
                        <th class="">Pour l'ISG de Sousse</th>
                        <th  class="">Pour l'entreprise</th>
                        

                    </tr>
                </thead>
                <tbody>
                    
                    <tr class="gradeX">
                        
                        
                        <td> Sousse le, {{$an2}}/{{$an3}}/{{$an1}}  <br><br><br> Le Secrétaire Général: Grassa Jamel </td>
                                            <td>Avis favorable <br> <br> Nom et Prénom:<br>Fonction:<br>Nom et Prénom encadrant entreprise:<br>
                                                Email encadrant entreprise:<br> Cachet<br></td>
                        
                    
                    </tr>
                    
                    
                    
                    
                </tbody>
            </table><br><br><br>
            <button onclick="return(window.print())">Imprimer
                
            </button>

            

<script src="assets/vendor/jquery/jquery.js"></script>
    <script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    
    <!-- Specific Page Vendor -->
    <script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
    <script src="assets/vendor/flot/jquery.flot.js"></script>
    <script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="assets/vendor/raphael/raphael.js"></script>
    <script src="assets/vendor/morris/morris.js"></script>
    <script src="assets/vendor/gauge/gauge.js"></script>
    <script src="assets/vendor/snap-svg/snap.svg.js"></script>
    <script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
    
    <!-- Theme Base, Components and Settings -->
    <script src="assets/javascripts/theme.js"></script>
    
    <!-- Theme Custom -->
    <script src="assets/javascripts/theme.custom.js"></script>
    
    <!-- Theme Initialization Files -->
    <script src="assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
    
			
</body>
</html>