<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="assets/vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="assets/vendor/modernizr/modernizr.js"></script>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section role="main" class="content ">
          
          <div class="panel-body">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="p-5">
                      REPUBLIQUE TUNISIENNE <br>
                       ********<br>
                      MIISTERE DE L'ENSEIGNANT SUPERIEUR<br>
                      ET LA RECHERCHE SCIENTIFIQUE<br>
                      ********<br>
                      UNIVERSITE DE SOUSSE<br>
                      <strong>INSTITUT SUPERIEUR DE GESTION DE SOUSSE</strong>
                    
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <div class="">
                        <div class="input-group input-search">
                          
                          <span class="input-group-btn">
                            <button ><img src="images\mesrs.png"></button>
                          </span>
                        </div>
                      </div>
                    </div>
                  
                </div>
                <br>
                <br>
                <br>
                <br>
                <strong class="center"><h1>Demande de stage</h1><br>
                  <h4>année universitaire ....</h4></strong> <br><h5 class="center">(L'étudiant doit remettre<strong> obligatoirement</strong> une copie au guichet)</h5><br>
                  <h4>Nous avons l'honneur de venir par la présente sollicité votre bienveillance un stage de formation pour<br><br> l'étudiant(e): <strong>{{session('nom')}} {{session('prenom')}}</strong><br><br>
                  Au sein de votre honorable entreprise:..............................................<br><br>
                  L'étudiant(e) est titulaire de la CIN n° ......  et de l'inscription .... <br><br> Il (elle) inscrit(e) en .....<br><br> Le stage de formation est d'une durée de <u>trois mois</u> de présence à compter du ...... . <br><br>  Ce stage est <strong>obligatoirement</strong> est s'inscrit dans le cadre de l'obtention de son diplome de <strong><u>Licence</u></strong><br><br> Nous comptons sur votre collaboration et l'interet que vous accordez à la qualité de la formation pour <br><br> l'insertion de nos jeunes étudiants dans le milieu professionnel.<br><br> Si vous etrs  d'accord pour accueillir notre étudiant(e), nous vous sauriez gré de bien vouloir signer ce document <br><br> et le retourner à l'étudiant(e). Une lettre d'affectation qui organise les rapports entre l'étudiant <br><br> stagiaire, l'entreprise et l'institution sera signée ultérieurement.<br> <br> Veuillez,Madame, Monsieur, accepter nos salutations les plus distinguées.</h4> <br><br><br>

                <table class="table table-bordered table-striped mb-none ">
                  <thead>
                    <tr>
                      <th class="center">Pour l'ISG de Sousse</th>
                      <th  class="center">Pour l'entreprise</th>
                      

                    </tr>
                  </thead>
                  <tbody>
                    
                    <tr class="gradeX">
                      <form action="modifieradmin" method="get">
                      
                      <td> Sousse le, ....  <br><br><br> Le Secrétaire Général .......</td>
                      <td>Avis favorable <br> <br><br> Nom Prénom:.....<br> Fonction:.......<br><br><br> Cachet</td>
                      
                      
                    </form>
                    </tr>
                    
                    
                    
                    
                  </tbody>
                </table>
                <br> <br> <br>
                <div class="mb-xs text-center">
                  <button type="submit" class="btn btn-primary hidden-xs">Imprimer</button>
                
                </div>
              </div>
          


              
        </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>


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