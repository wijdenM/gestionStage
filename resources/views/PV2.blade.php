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
   <?php
                                $date = new Date();
                                $an = $date->year;
                                $anM = $date->month;
                                $anD = $date->day;
                                $ann = $date->hour;
                                $anH = $ann-1;
                                $an1 = $an - 1;
                                $anMin = $date->minute;

                                ?>
                        
                        <h5 class="text-center">Ministère de l'Enseignement supérieur et de la Recherche Scientifique</h5>
                        <h5 class="text-center">Université de Sousse</h5>
                        <h5 class="text-center"><b>Institut Supérieur de Gestion Sousse</b></h5>
                        <div class="center"><img src="images/logoisg.png"></div>
                        <h3 class="text-center"><b>PV DE SOUTENANCE</b></h3>
                        <h4 class="text-center"><b>Année Universitaire {{$an1}}/{{$an}}</b></h4>
                        <h4 class="text-center"><b>Date: {{$anD}}/ {{$anM}}/{{$an}}&nbsp;Heure:{{$anH}}:{{$anMin}} &nbsp; Salle:....</b></h4><br>
                        <h1 class="text-center"><b>Troisième Année Licence En <b></h1>
                        <h2 class="text-center"><input type="text" name=""></h2>
                        <h4 class="text-center">Etudiant(s)</h4>
                        <div class="text-center">
                            <table  class="table table-bordered table-striped mb-none" >
                                <tr>
                                    <td>Nom et Prénom</td>
                                    <td>N° Inscription</td>
                                    <td>N° CIN</td>
                                </tr>
                                <tr>
                                    <td><br></td>
                                    <td><br></td>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td><br></td>
                                    <td><br></td>
                                    <td><br></td>
                                </tr>
                            </table>
                        </div>
                        <h4 class="text-center">Jury</h4>
                        <div >
                            <table  class="table table-bordered table-striped mb-none ">
                                <tr>
                                    <td>Président (Rapporteur)</td>
                                    
                                </tr>
                                <tr>
                                    <td>Encadrant Académique</td>
                                    
                                </tr>
                                <tr>
                                    <td>Encadrant Professionnel</td>
                                    
                                </tr>
                                
                            </table>
                        </div><br>
                        <table>
                            <tr>
                                <td>
                        <h5><b>&nbsp;&nbsp;Type de rapport:</b></td><td><label>&nbsp;&nbsp;Rapport de stage&nbsp;&nbsp;<input type="checkbox" name="rapportStage"></label></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<label>&nbsp;&nbsp;Plan d'affaires&nbsp;&nbsp;<input type="checkbox" name="planaff"></label></td></h5></tr>
                        <tr>
                            <td>
                        <h5><b>&nbsp;&nbsp;Session:</b></td><td><label>&nbsp;&nbsp;Principale&nbsp;&nbsp;<input type="checkbox" name="principale"></label></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<label>&nbsp;&nbsp;Rattrapage&nbsp;&nbsp;<input type="checkbox" name="rattrapage"></label></td></h5>
                    </tr>
                        </table><br>
                        <div >
                            <table  class="table table-bordered table-striped mb-none ">
                                <tr>
                                    <td>Titre du rapport de stage/plan d'affaires:........
                                        .....................................................<br><br>
                                    Lieu de stage:.........................................
                                ..............................................</td>
                                    
                                </tr>
                                
                                
                                
                            </table>
                        </div>
                        
                        <h3 class="text-center"><b>EVALUATION DU RAPPORT DE STAGE/PLAN D'AFFAIRES</b></h3>
                        <div >
                            <table  class="table table-bordered table-striped mb-none ">
                                <tr>
                                    <td>
                                        <h6><h6 class="text-center">FORME</h6>
                                            <u><b>Présentation:</b></u>&nbsp;page de couverture, logos, sommaire, plan, mise en valeur du contenu, etc.<br>
                                    
                                    <u><b>Expression:</b></u> &nbsp;orthographe, tournures de phrases, etc.<br>
                                    1.L'expression est correct, la lecture est agréable.<br>
                                    2.Nombreuses fautes d'orthographe, mauvaises tournituresde phrases, etc.</h6></td>
                                    <td><br>
                                        <h6>{{$req->a}}/5 points</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6><h6 class="text-center">FOND</h6>
                                            <u><b>Valeur de rapport:</b></u>&nbsp;contenu, informations, démarche méthodologique, suivie...<br>
                                    
                                    <u><b>Compréhension:</b></u> &nbsp;compréhension du sujet,dévloppement des points importants, maitrise du sujet, etc.<br>
                                    <u><b>Analuse:</b></u> &nbsp; selon une méthode analytique, qualitative, quantitative, etc.<br>
                                    <u><b>Objectifs:</b></u> &nbsp; objectifs validé, évolutions prévues, suggestions, etc.
                                    </h6></td>
                                    <td><br>
                                        <h6>{{$req->aa}}/10 points</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6><h6 class="text-center">SOUTENANCE</h6>
                                            <b>Contenu de la présentation</b><br>
                                            <b>Communication orale</b><br>
                                            <b>Communication visuelle</b><br>
                                            <b>Discussion</b><br>
                                    
                                    </td>
                                    <td><br>
                                        <h6>{{$req->aaa}}/5 points</h6>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <h5 class="text-center"><u><b>Décision du jury</b></u></h5>
                        <div >
                            <table  class="table table-bordered table-striped mb-none ">
                                <tr>
                                    <td>
                                        <h6 class="text-center"><b>Validé </b>&nbsp;&nbsp;&nbsp;&nbsp; Note: <input type="text" name="">/20<br><u><b>Mention</b></u> &nbsp;&nbsp;<input type="checkbox" name="TB">&nbsp;Très  bien &nbsp;&nbsp;<input type="checkbox" name="B">&nbsp;Bien&nbsp;&nbsp; <input type="checkbox" name="AB"> &nbsp;Assez bien&nbsp;&nbsp; <input type="checkbox" name="P">&nbsp;Passable </h6> 
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                     <h6 class="text-center">Non Validé Note: <input type="text" name="">/20 &nbsp;(la note doit étre <10) </h6></td>
                                    
                                </tr>
                                
                                
                                
                            </table>
                        </div>
                        <br>
                        <div class="text-center">
                            <table  class="table table-bordered table-striped mb-none" >
                                <tr>
                                    <td></td>
                                    <td><h6>Nom et Prénom</h6></td>
                                    <td><h6>Signature</h6></td>
                                </tr>
                                <tr>
                                    <td><h6>Le rapporteur</h6></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><h6>L'encadrant académique</h6></td>
                                    <td><br></td>
                                    <td><br></td>
                                </tr>
                                <tr>
                                    <td><h6>L'encadrant professionnel</h6></td>
                                    <td><br></td>
                                    <td><br></td>
                                </tr>
                            </table>
                        </div>
                        

                        

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