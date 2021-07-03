<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    

    <title>Espace Etudient</title>
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
      
      

       <td ><img src="images/mesrs.png" ></td>
        </tr>
    </table>
    <?php
                                $date = new Date();
                                $an = $date->year;
                                $an1 = $an - 1;

                                ?>
       
       <h3 class="text-center"><strong>Lettre d'affectation</strong></h3>
       <br>
	   <h5  class="text-center" >année universitaire {{$an1}}/{{$an}} </h5>
        <br><h6  class="text-center">{{session('niveau')}}&nbsp;en&nbsp;{{session('filiere')}}</h6>
        La présente de lettre d'affectation à pour but d'organiser les rapports entre l'étudient stagiaire, l'entreprise ou se déroulera le stage et l'établissement d'enseignement. Elle définit les conditions dans lesquelles l'étudiant stagiaire  sera accueilli à l'entreprise pour une durée de &nbsp;<strong>{{$req->duree}}</strong> à partie  de &nbsp;<strong>{{$req->date}}</strong>  <br> Les partis signataires sont:
                                    
       <table class="table table-bordered table-striped mb-none ">
            <thead>
                    <tr>
                        <td >L'entreprise d'accueil:<br>
                        <strong>Nom d'encadrent professionnel:</strong><br> Fonction<br>
                        Tel:.................. Fax:..................
                        E-mail:................<br>
                        Signature:................ date:..........</td>
                    </tr>
                    <tr>
                        <td >Le stagiaire: Nom Prénom::&nbsp;<strong>{{session('nom')}} &nbsp;{{session('prenom')}}</strong><br>
                        N° Inscription:&nbsp;<strong>{{session('numinscrit')}}</strong> &nbsp; CIN:&nbsp;<strong>{{session('CIN')}}</strong><br> 
                        Tel:{{$req->numtel}} Fax:{{$req->fax}}
                        E-mail:&nbsp;<b>{{session('email')}}</b><br>
                        </td>
                    </tr>
                    <tr>
                        <td >L'institut supérieur de Gestion Sousse<br>
                        L'encadrent académique:&nbsp;<b>{{session('nomenseignant')}}&nbsp;{{session('prenomenseignant')}}</b><br> 
                        Tel:&nbsp;<b>{{session('numtel')}}</b>&nbsp;Fax:
                        E-mail:.....................<br>
                        Signature:................ date:..........</td>
                    </tr>
            </thead>
                                    
        </table >
        <br>
        L'étudiant doit déposer auprès de l'administration de l'ISG de Sousse dans les délais affichés:<br><ul><li>3 copies du rapport de stage aux membres du jury éventuel(un représentant de l'entreprise, l'encadrent <br>et le président du jury), ainsi que 3 copies numériques collées à la dérnière page du document.<br></li>
        <li>Une autorisation de dépot signée par l'encadrent académique.<br></li>
        <li>Une fiche d'évaluation signée par l'entreprise.<br></li>
         <u >Les signataires</u><br><br>
        <table class="table table-bordered table-striped mb-none " >
            <tr>
                <td>Pour l'entreprise:<br>Nom et Prénom</td>
                <td>L'étudiant stagiaire:<br>Nom et Prénom</td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">ISG de Sousse: le<br>le Sécrétaire Général:<br></td>
            </tr>
        </table>
        <button onclick="return(window.print())">imprimer</button>

   
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