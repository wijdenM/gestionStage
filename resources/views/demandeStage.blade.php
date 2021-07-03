<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Espace Etudient</title>
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
		<form action="demandeStage2" method="post">
			@csrf
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
								<span class="name">{{session('nom')}} {{session('prenom')}}</span>
								<span class="role">Etudiant</span>
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
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Déconnexion</a>
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
										<a href="indexEtudiant">
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
										<a href="EntrepriseEt">
											<span class="pull-right label label-primary"><?php
												echo $cmp;?></span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mailbox</span>
										</a>
									</li> 
									<li>
										<a href="EntrepriseEt">
											
											<i class="fa fa-building" aria-hidden="true"></i>
											<span>Entreprise d'accueil</span>
										</a>
									</li> 
									<li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Impression</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="demandeStage">
													 Demande de stage
												</a>
											</li>
											<li>
												<a href="lettreAffectation">
													 Lettre d'affectation
												</a>
											</li>
											
											
											
										</ul>
									</li>
									<li>
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Déposer la mémoire</span>
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
						<h2>Demande de stage</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Etudient</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a></a>
						</div>
					</header>

					<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md center">
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
											<div class="search">
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
								<?php
								$date = new Date();
								$an = $date->year;
								$an1 = $an - 1;
								$an2 = $date->day;
								$an3 = $date->month;

								?>
								<strong class="center"><h1>Demande de stage</h1><br>
									<h4>année universitaire {{$an1}}/{{$an}}</h4></strong> <br><h5 class="center">(L'étudiant doit remettre<strong> obligatoirement</strong> une copie au guichet)</h5><br>
									<h4>Nous avons l'honneur de venir par la présente sollicité votre bienveillance un stage de formation pour<br><br> l'étudiant(e): <strong>{{session('nom')}} {{session('prenom')}}</strong><br><br>
									Au sein de votre honorable entreprise:<input type="text" name="entreprise"><br><br>
									L'étudiant(e) est titulaire de la CIN n° <strong>{{session('CIN')}}</strong> et de l'inscription <strong>{{session('numinscrit')}}</strong> <br><br> Il (elle) inscrit(e) en <strong>{{session('niveau')}}&nbsp;{{session('filiere')}}</strong><br><br> Le stage de formation est d'une durée de <u>trois mois</u> de présence à compter du <input type="text" name="dureStage"> <br><br>  Ce stage est <strong>obligatoirement</strong> est s'inscrit dans le cadre de l'obtention de son diplome de <strong><u>Licence</u></strong><br><br> Nous comptons sur votre collaboration et l'interet que vous accordez à la qualité de la formation pour <br><br> l'insertion de nos jeunes étudiants dans le milieu professionnel.<br><br> Si vous etrs  d'accord pour accueillir notre étudiant(e), nous vous sauriez gré de bien vouloir signer ce document <br><br> et le retourner à l'étudiant(e). Une lettre d'affectation qui organise les rapports entre l'étudiant <br><br> stagiaire, l'entreprise et l'institution sera signée ultérieurement.<br> <br> Veuillez,Madame, Monsieur, accepter nos salutations les plus distinguées.</h4> <br><br><br>

								<table class="table table-bordered table-striped mb-none ">
									<thead>
										<tr>
											<th class="center">Pour l'ISG de Sousse</th>
											<th  class="center">Pour l'entreprise</th>
											

										</tr>
									</thead>
									<tbody>
										
										<tr class="gradeX">
											
											
											<td> Sousse le, {{$an2}}/{{$an3}}/{{$an1}}	<br><br><br> Le Secrétaire Général: Grassa Jamel </td>
											<td>Avis favorable <br> <br><br> Nom et Prénom:<br> <br>Fonction:<br><br>Nom et Prénom encadrant entreprise:<br><br>
												Email encadrant entreprise:<br><br> Cachet<br><br><br><br></td>
											
											
										
										</tr>
										
										
										
										
									</tbody>
								</table>
								<br> <br> <br>
								<div class="mb-xs text-center">
									
									<button type="submit" class="btn btn-primary hidden-xs">Valider</button>
								
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
		</form>
	</body>
</html>