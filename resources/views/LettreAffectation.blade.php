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
		<form action="lettreaff2" method="post">
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
										<a href="mailbox-folder">
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
						<h2>Lettre d'affectation</h2>
					
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
								$an2 = $date->month;
								$an3 = $date->day;

								?>
								<strong class="center"><h1>Lettre d'affectation</h1><br>
									<h4>année universitaire {{$an1}}/{{$an}}</h4></strong> <br><h5 class="center">{{session('niveau')}}&nbsp;en&nbsp;{{session('filiere')}}</h5><br>
									<h4>La présente de lettre d'affectation à pour but d'organiser les rapports entre l'étudient stagiaire, l'entreprise ou <br><br>se déroulera le stage et l'établissement d'enseignement. Elle définit les conditions dans lesquelles l'étudiant <br><br>stagiaire  sera accueilli à l'entreprise pour une durée de <input type="text" name="duree"> à partie  de <input type="text" name="date"> <br><br><br> Les partis signataires sont:<br><br>
									

								<table class="table table-bordered table-striped mb-none ">
									<thead>
										<tr>
											<td >L'entreprise d'accueil:....<br>
												<strong>Nom d'encadrent professionnel:....</strong><br> Fonction:........<br>
												Tel:.................. Fax:..................
												E-mail:................<br>
											Signature:................ date:..........</td>
											
											

										</tr>
										<tr>
											<td >Le stagiaire: Nom Prénom:&nbsp;<strong>{{session('nom')}} &nbsp;{{session('prenom')}}</strong><br>
												N° Inscription:&nbsp;<strong>{{session('numinscrit')}}</strong> &nbsp; CIN:&nbsp;<strong>{{session('CIN')}}</strong><br> 
												Tel:<input type="text" name="numtel"> 
												 <br>
											</td>
											
											

										</tr>
										<tr>
											<td >L'institut supérieur de Gestion Sousse<br>
											  L'encadrent académique: &nbsp;<b>{{session('nomenseignant')}}&nbsp;{{session('prenomenseignant')}}</b><br>
												Tel:&nbsp;<b>{{session('numtel')}}</b>&nbsp; 
												E-mail:&nbsp; <b>{{session('email')}}</b><br>
											Signature:................ date:&nbsp;<b>{{$an3}}/{{$an2}}/{{$an}}</b></td>
											
											

										</tr>
									</thead>
									<!--<tbody>
										
										<tr class="gradeX">
											<form action="modifieradmin" method="get">
											
											<td> Sousse le, ....	<br><br><br> Le Secrétaire Général .......</td>
											<td>Avis favorable <br> <br><br> Nom Prénom:.....<br> Fonction:.......<br><br><br> Cachet</td>
											
											
										</form>
										</tr>
										
										
										
										
									</tbody>-->
								</table >
								<br><br>
								L'étudiant doit déposer auprès de l'administration de l'ISG de Sousse dans les délais affichés:<br><br><ul><li>3 copies du rapport de stage aux membres du jury éventuel(un représentant de l'entreprise, l'encadrent <br><br>et le président du jury), ainsi que 3 copies numériques collées à la dérnière page du document.<br><br></li>
									<li>Une autorisation de dépot signée par l'encadrent académique.<br><br></li>
									<li>Une fiche d'évaluation signée par l'entreprise.<br><br></li>
									<u >Les signataires</u><br><br>
									<table class="table table-bordered table-striped mb-none " >
										<tr>
											<td>Pour l'entreprise:<br><br>Nom et Prénom</td>
											<td>L'étudiant stagiaire:<br><br>Nom et Prénom: &nbsp; <b>{{session('nom')}} &nbsp;{{session('prenom')}}</b></td>

										</tr>
										<tr>
											<td colspan="2" class="center">ISG de Sousse: le&nbsp; {{$an3}}/{{$an2}}/{{$an}}<br><br>
												le Sécrétaire Général:

											</td>
										</tr>
									</table>
								<br> <br> <br>
								<div class="mb-xs text-center">
									<a href="lettreaff2">
									<button type="submit" class="btn btn-primary hidden-xs">Valider</button></a>
								
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