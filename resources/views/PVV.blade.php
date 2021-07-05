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
		<form action="post" method="PV2">
			@csrf
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="images/drapeau.png" height="25" alt="JSOFT Admin" /><div>REPUBLIQUE TUNISIENNE <strong>MESRS</strong></div>
					</a>

					<a href="../" class="logo">
						<img src="images/logoisg.png" height="45" alt="JSOFT Admin" />

					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				<!-- start: search & user box -->
				<div class="header-right">



					<!--<span class="separator"></span>-->



					<span class="separator"></span>

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
										<a href="indexEncadrantAca">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Accueil</span>
										</a>
									</li>
									<li>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary">182</span>
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
												<a href="listeentreprise">
													 Master
												</a>
											</li>



										</ul>

									</li>

									<li class="nav-parent ">
										<a >
											<i class="fa fa-list aria-hidden="true"></i>
											<span>Liste des étudiants </span>
										</a>
										<ul class="nav nav-children">


											<li>
												<a href="test">
													 Licence
												</a>
											</li>
											<li>
												<a href="listeentreprise">
													 Master
												</a>
											</li>



										</ul>

									</li>

									<li>
										<a href="AttestationEncad">

											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<span>Attestation d'encadrement</span>
										</a>
									</li>
									<li>
										<a href="PVv">

											<i class="fa fa-file-text-o" aria-hidden="true"></i>
											<span>Les PVs</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>




				</aside>-->
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>PV</h2>

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
					<div class="panel-body">
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

						<h5 class="center">Ministère de l'Enseignement supérieur et de la Recherche Scientifique</h5>
						<h5 class="center">Université de Sousse</h5>
						<h5 class="center"><b>Institut Supérieur de Gestion Sousse</b></h5>
						<div class="center"><img src="images/logoisg.png"></div><br>
						<h3 class="center"><b>PV DE SOUTENANCE</b></h3>
						<h4 class="center"><b>Année Universitaire {{$an1}}/{{$an}}</b></h4><br>
						<h4 class="center"><b>Date: {{$anD}}/ {{$anM}}/{{$an}}&nbsp;Heure:{{$anH}}:{{$anMin}} &nbsp; Salle:....</b></h4><br>
						<h1 class="center"><b>Troisième Année Licence En <b></h1>
						<h2 class="center"><input type="text" name=""></h2>
						<h4 class="center">Etudiant(s)</h4>
						<div class="center">
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
						<h4 class="center">Jury</h4>
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
						<br>
						<br>
						<h3 class="center"><b>EVALUATION DU RAPPORT DE STAGE/PLAN D'AFFAIRES</b></h3>
						<div >
							<table  class="table table-bordered table-striped mb-none ">
								<tr>
									<td>
										<h4><h4 class="center">FORME</h4>
											<u><b>Présentation:</b></u>&nbsp;page de couverture, logos, sommaire, plan, mise en valeur du contenu, etc.<br>

									<u><b>Expression:</b></u> &nbsp;orthographe, tournures de phrases, etc.<br>
									1.L'expression est correct, la lecture est agréable.<br>
									2.Nombreuses fautes d'orthographe, mauvaises tournituresde phrases, etc.</h4></td>
									<td><br>
										<h4><input type="text" name="a">/5 points</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4><h4 class="center">FOND</h4>
											<u><b>Valeur de rapport:</b></u>&nbsp;contenu, informations, démarche méthodologique, suivie...<br>

									<u><b>Compréhension:</b></u> &nbsp;compréhension du sujet,dévloppement des points importants, maitrise du sujet, etc.<br>
									<u><b>Analuse:</b></u> &nbsp; selon une méthode analytique, qualitative, quantitative, etc.<br>
									<u><b>Objectifs:</b></u> &nbsp; objectifs validé, évolutions prévues, suggestions, etc.
									</h4></td>
									<td><br>
										<h4><input type="text" name="aa">/10 points</h4>
									</td>
								</tr>
								<tr>
									<td>
										<h4><h4 class="center">SOUTENANCE</h4>
											<b>Contenu de la présentation</b><br>
											<b>Communication orale</b><br>
											<b>Communication visuelle</b><br>
											<b>Discussion</b><br>

									</td>
									<td><br>
										<h4><input type="text" name="aaa">/5 points</h4>
									</td>
								</tr>
							</table>
						</div><br>
						<h3 class="center"><u><b>Décision du jury</b></u></h3>
						<div >
							<table  class="table table-bordered table-striped mb-none ">
								<tr>
									<td>
										<h4 class="center"><b>Validé </b>&nbsp;&nbsp;&nbsp;&nbsp; Note: <input type="text" name="">/20<br><u><b>Mention</b></u> &nbsp;&nbsp;<input type="checkbox" name="TB">&nbsp;Très  bien &nbsp;&nbsp;<input type="checkbox" name="B">&nbsp;Bien&nbsp;&nbsp; <input type="checkbox" name="AB"> &nbsp;Assez bien&nbsp;&nbsp; <input type="checkbox" name="P">&nbsp;Passable </h4>
									</td>

								</tr>
								<tr>
									<td>
									 <h4 class="center">Non Validé Note: <input type="text" name="">/20 &nbsp;(la note doit étre <10) </h4></td>

								</tr>



							</table>
						</div>
						<br><br>
						<div class="center">
							<table  class="table table-bordered table-striped mb-none" >
								<tr>
									<td></td>
									<td>Nom et Prénom</td>
									<td>Signature</td>
								</tr>
								<tr>
									<td>Le rapporteur</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td>L'encadrant académique</td>
									<td><br></td>
									<td><br></td>
								</tr>
								<tr>
									<td>L'encadrant professionnel</td>
									<td><br></td>
									<td><br></td>
								</tr>
							</table>
						</div>
						<br><br>

						<div class="mb-xs text-center">
									<a href="PV2">
									<button type="submit" class="btn btn-primary hidden-xs">Valider</button></a>

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
