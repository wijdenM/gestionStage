<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>espace administrateur</title>
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
								<img src=images/{{session('photo')}} height="50px" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name"> {{session('nom')}} {{session('prenom')}} </span>
								<span class="role">administrateur</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="modifierProfil"><i class="fa fa-user"></i> Profile</a>
								</li>
								
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Deconnection </a>
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
										<a href="index">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Accueil</span>
										</a>
									</li>
									<li>
										<a href="mailbox-folder">
											<?php
											$cmp = 0;


											 $servername = 'localhost';
                                             $username = 'root';
                                             $password = '';
                                             $database = 'gestionstage';
                                             $mail=session('email');
            
                                               //On établit la connexion
                                             $conn = new mysqli($servername, $username, $password, $database);
            
                                             //On vérifie la connexion
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

											<span class="pull-right label label-primary">
												<?php
												echo $cmp;?>
													
												</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Boite Mail</span>
										</a>
									</li>
									<li class="nav-parent">
										<a >
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>G.utilisateures</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="listeadmin">
													 Administrateur
												</a>
											</li>
											<!--<li>
												<a href="listeencadrent">
													 Encadrant Entreprise
												</a>
											</li>-->
											<li>
												<a href="listeenseignant">
													 Enseignant
												</a>
											</li>
											<li>
												<a href="listeentreprise">
													 Entreprise
												</a>
											</li>
											<li >
												<a href="listeetudiant">
													 Etudiant
												</a>
											</li>
											
											
											
											
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Consultation</span>
										</a>
										<ul class="nav nav-children">

											<li>
												<a href="listeencadAdmin">
													Les PV
												</a>
											</li>
											
											<li>
												<a href="EncadrantAca">
													 Les encadrants académiques
												</a>
											</li>
											<!--<li>
												<a href="pages-recover-password.html">
													 Les attestations d'encadrements
												</a>
											</li>-->
											<li>
												<a href="registre">
													 Les registres
												</a>
											</li>
											
											
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Documentation</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="remerciment">
													 Lettre de remerciment
												</a>
											</li>
											<li>
												<a href="ui-elements-icons.html">
													 Invitation de soutenance
												</a>
											</li>
			
											
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
									
									
							
				
				</aside>-->
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Accueil</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Accueil</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<?php
											$cmp = 0;
											$en = 0;
											$depart = 0;
											$filiere = 0;


											 $servername = 'localhost';
                                             $username = 'root';
                                             $password = '';
                                             $database = 'gestionstage';
                                             $mail=session('email');
            
                                               //On établit la connexion
                                             $conn = new mysqli($servername, $username, $password, $database);
            
                                             //On vérifie la connexion
                                             if($conn->connect_error){
                                             die('Erreur : ' .$conn->connect_error);
                                             }
                                           

                                             $resultat = mysqli_query($conn ,"select * FROM etudiants");
												$nb=0;
												while($row=mysqli_fetch_array($resultat))
												{
													$cmp++;
												}
												$resultat = mysqli_query($conn ,"select * FROM enseignants");
												$nb=0;
												while($row=mysqli_fetch_array($resultat))
												{
													$en++;
												}
												$resultat = mysqli_query($conn ,"select * FROM departement");
												$nb=0;
												while($row=mysqli_fetch_array($resultat))
												{
													$depart++;
												}
												$resultat = mysqli_query($conn ,"select * FROM filiere");
												$nb=0;
												while($row=mysqli_fetch_array($resultat))
												{
													$filiere++;
												}




											?>
					<div class="panel-body">
						<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-graduation-cap"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Les étudiants</h4>
														<div class="info">
															<strong class="amount"><?php
												echo $cmp;?></strong>
															<span class="text-primary"></span>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="listeetudiant">Afficher Tous</a>
													</div>
												</div>
											</div>
										</div>

									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-university"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Les enseignants</h4>
														<div class="info">
															<strong class="amount"><?php
												echo $en;?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="listeenseignant">Afficher tous</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-file-text-o"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">les départements</h4>
														<div class="info">
															<strong class="amount"><?php
												echo $depart;?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="listeDepart">Afficher tous</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								
								<div class="col-md-12 col-lg-6 col-xl-6">
									<section class="panel panel-featured-left panel-featured-quartenary">
										<div class="panel-body">
											<div class="widget-summary">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quartenary">
														<i class="fa fa-tasks"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">les Filières</h4>
														<div class="info">
															<strong class="amount"><?php
												echo $en;?></strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase" href="listefiliere">afficher tous</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
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