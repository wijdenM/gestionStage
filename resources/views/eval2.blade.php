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
      
      

       <td class="" ><img src="images/mesrs.png" ></td>
        </tr>
    </table>

    
       
       <?php
                                $date = new Date();
                                $an = $date->year;
                                $an1 = $an - 1;
                                $an2 = $date->day;
                                $an3 = $date->month;


                                ?>
       
       <strong class="text-center"><h1>Fiche d'évaluation du stagiaire</h1>
                                    <h4>année universitaire &nbsp;{{$an1}}/{{$an}}</h4></strong> 
                                    <h6>Nom de l'étudiant(e):<br>
                                        N° CIN:<br>
                                        Filière:<br>
                                        Thème de stage:<br>
                                        Nom du responsable du stage en entreprise:</h6>
                                    

                                <table class="table table-bordered table-striped mb-none ">
                                    <thead>
                                        <tr>
                                            <td ></td>
                                            <td class="text-center"><h5><strong>EVALUATION DE 1 à 5</strong></h5></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >RESPECT DES CONTRAINTES (PONCTUALITE,..)</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >INTEGRATION DANS L'ENTREPRISE</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >COMMUNICATION</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >CAPACITE DE TRAVAIL</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >ORGANISATION</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >TRAVAIL EN GROUPE</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >AUTONOMIE</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >DEGRE D'ATTEINTE DES OBJECTIFS DE LA MISSION</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                        <tr>
                                            <td >TOTAL / 40</td>
                                            <td><input type="text" name=""></td>
                                            
                                            

                                        </tr>
                                    </thead>
                                   
                                </table >
                               
                                <h6>Veuillez évaluer les différents éléments sur une échelle de 1 à 5. <br>
                                    
                                1.Mauvais&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2.Médiocre&nbsp;&nbsp;&nbsp;
                                            3.Moyen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            4.Bon&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            5.Excellent
                                        
                                     <br><br> Souhaitez-vous assister à la soutenance :&nbsp;&nbsp; 
                                     <input type="radio" id="contactChoice1" name="contact" value="oui">
                                     <label for="contactChoice1">&nbsp;OUI</label>&nbsp;&nbsp;

                                     <input type="radio" id="contactChoice2" name="contact" value="non">
                                     <label for="contactChoice2">&nbsp;NON</label>
                                     </h6>
                                     <br> <h6>A <input type="text" name="">, le {{$an2}}/{{$an3}}/{{$an}}</h6><br><label><strong>Signature: Encadrent professionnel. Cachet de l'entreprise</strong></label><input type="file" name="">
                                    
                                
                                    
                                        
                                

                               
                                
                            </div>
                            
                    
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