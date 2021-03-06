<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Espace Enseignant</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
		<meta name="author" content="JSOFT.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
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
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="images/drapeau.png" height="25" alt="JSOFT Admin" /><div>REPUBLIQUE TUNISIENNE <strong>MESRS</strong></div>
					</a>

					
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					
			
					<span class="separator"></span>
			
					<a href="../" class="logo">
						<img src="images/logoisg.png" height="45" alt="JSOFT Admin" />
						
					</a>
			
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img  src=images/{{session('photo')}} height="50px" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name">{{session('nom')}} {{session('prenom')}}</span>
								<span class="role">Enseignant</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="modifierProfil"><i class="fa fa-user"></i> Mon Profile</a>
								</li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> D??connexion</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li class="nav-active">
										<a href="indexEncadrantAca">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Accueil</span>
										</a>
									</li>
									<li>
										<?php
											$cmp = 0;


											 $servername = 'localhost';
                                             $username = 'root';
                                             $password = '';
                                             $database = 'gestionstage';
                                             $mail=session('email');
            
                                               //On ??tablit la connexion
                                             $conn = new mysqli($servername, $username, $password, $database);
            
                                             //On v??rifie la connexion
                                             if($conn->connect_error){
                                             die('Erreur : ' .$conn->connect_error);
                                             }
                                           

                                             $resultat = mysqli_query($conn ,"select * FROM messagerie where etat=1 and MailDest='$mail'");
												$nb=0;
												while($row=mysqli_fetch_array($resultat))
												{
													$cmp++;
												}


											?>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary"><?php
												echo $cmp;?></span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Boite Mail</span>
										</a>
									</li>
									<li class="nav-parent ">
										<a >
											<i class="fa fa-check-square-o" aria-hidden="true"></i>
											<span>Affectation </span>
										</a>
										<ul class="nav nav-children">
											
											<!--<li>
												<a href="listeencadrent">
													 Encadrant Entreprise
												</a>
											</li>-->
											<li>
												<a href="test">
													 Licence
												</a>
											</li>
											<li>
												<a href="testMaster">
													 Master
												</a>
											</li>
											
											
											
										</ul>
										
									</li>

									<li class="nav-parent ">
										<a >
											<i class="fa fa-list aria-hidden="true"></i>
											<span>Liste des ??tudiants </span>
										</a>
										<ul class="nav nav-children">
											
										
											<li>
												<a href="ListeetudEncad">
													 Licence
												</a>
											</li>
											<li>
												<a href="ListeetudEncadMaster">
													 Master
												</a>
											</li>
											
											
											
										</ul>
										
									</li>

									<li>
										<a href="AttestationEncad">
											
											<i class="fa fa-certificate"  aria-hidden="true"></i>
											<span>Attestation d'encadrement</span>
										</a>
									</li>
									<li>
										<a href="PVV">
											
											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<span>Les PVs</span>
										</a>
									</li>
								</ul>
							</nav>
							</div>
							</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Affectation</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="indexEncadrantAca">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Enseignant</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a></a>
						</div>
					</header>
					<div class="panel-body">
						<h1 class="center">Affectation des encdrants acad??miques</h1><br><button class="btn btn-default"><a href="listeEncadrement">  Afficher la liste d'encadrement</a></button>
						<br><br>
						<div class="row">
							<div class="col-md-6">

			<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'gestionstage';
            
            //On ??tablit la connexion
            $conn = new mysqli($servername, $username, $password, $database);
            
            //On v??rifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            
            ?>


						<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											
										</div>
						
										<h2 class="panel-title">Liste des ??tudiants</h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
											
						
						                <table class="table mb-none">
									<thead>
										<tr>
											<th>ID</th>
											<th>Sujet</th>
											<th>Etudiant1</th>
											<th>Etudiant2</th>
											
											<th>Affecter</th>
											
											
											

										</tr>
									</thead>
									<tbody>
										@foreach ($pro as $pro)
										<tr class="gradeX">
											<form action="test1" method="post">
												@csrf
											
											<input type="hidden" value="{{$pro->idprojet}}" name="id">
											
											<td>{{$pro->idprojet}}	<input type="hidden" value="{{$pro->idprojet}}" name="id"></td>
											<td>{{$pro->sujet}}
											</td>
											<td> {{$pro->et1}} {{$pro->pt1}}</td>
											<td> {{$pro->et2}} {{$pro->pt1}}</td>
											<td><?php 
											//$res= mysqli->query("select * from enseignants");
												$resultat = mysqli_query($conn ,"select * from affectation where idprojet=$pro->idprojet");
												$nb=0;
												while($row=mysqli_fetch_array($resultat))
												{
													$nb++;
												}





												?>
											</td>
														 	
														 
										<td>
										<?php

										if ($nb > 0)
										{
											echo("affecter");
										}
										else{

											?>
										


											<button  class="btn btn-link"><i class="fa fa-check-square-o" aria-hidden="true"></i></button></td>
										<?php
											}

										?>
											</form>
											
										
										</tr>
										@endforeach
										
										
										
										
										
									</tbody>
								</table>
								</form>
										</div>
									</div>
								</section>
							</div>
							<div class="col-md-6">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="fa fa-caret-down"></a>
											
										</div>
						
										<h2 class="panel-title">Liste des encadrants acad??miques</h2>
									</header>
									<div class="panel-body">
										<div class="table-responsive">
                                    <table class="table mb-none">
									<thead>
										<tr>
											<th>ID</th>
											<th>Nom et Prenom encadrant</th>
											
											

										</tr>
									</thead>
									<tbody>
										@foreach ($e as $e)
										<tr class="gradeX">
											<form>
											
											
											<td>{{$e->idenseignant}}	<input type="hidden" value="" name="id"></td>
											<td>{{$e->nomenseignant}}&nbsp;{{$e->prenomenseignant}}
											</td>
											
										
											</form>
											
										
										</tr>
										@endforeach
										
										
										
										
										
									</tbody>
								</table>
										</div>
									</div>
								</section>
							</div>
						</div>
									<!--<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>ID</th>
											<th>Sujet</th>
											<th>Etudiant 1</th>
											<th>Etudiant 2</th>
											

										</tr>
									</thead>
									<tbody>
										
									</tr>
										
										
										
										
										
										
									</tbody>
								</table>-->
									
								</td>

								</tr>
								</table>
							</td>
					</div>


							
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								
							</div>
			
							
			
						</div>
					</div>
				</div>
			</aside>
		</section>
		<!--<div id="dialog" class="modal-block mfp-hide">
			<section class="panel">
				<header class="panel-heading">
					<h2 class="panel-title">Are you sure?</h2>
				</header>
				<div class="panel-body">
					<div class="modal-wrapper">
						<div class="modal-text">
							<p>Are you sure that you want to delete this row?</p>
						</div>
					</div>
				</div>
				<footer class="panel-footer">
					<div class="row">
						<div class="col-md-12 text-right">
							<button id="dialogConfirm" class="btn btn-primary">Confirm</button>
							<button id="dialogCancel" class="btn btn-default">Cancel</button>
						</div>
					</div>
				</footer>
			</section>
		</div>-->

		<!-- Vendor -->
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