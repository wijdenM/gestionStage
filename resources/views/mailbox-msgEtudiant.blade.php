<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Espace Etudiant</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

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
		<link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />

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

					<a href="../" class="logo">
						<img src="images/logoisg.png" height="45" alt="JSOFT Admin" />
						
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							
			
							<div class="dropdown-menu notification-menu large">
								
								<div class="content">
									<ul>
										
			
										
			
										
									</ul>
								</div>
							</div>
						</li>
						<li>
							
							<div class="dropdown-menu notification-menu">
								
								<div class="content">
									<ul>
										
										
										
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">Afficher tous</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							
							<div class="dropdown-menu notification-menu">
								
			
								
						</li>
					</ul>
			
					
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src=images/{{session('photo')}} height="50px" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
								<span class="name"> {{session('nom')}} {{session('prenom')}} </span>
								<span class="role">Eudiant</span>
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
									<li >
										<a href="index">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Accueil</span>
										</a>
									</li>
									<li class="nav-active">
										<a href="mailbox-folderEtudiant">
											<span class="pull-right label label-primary">
												
											</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Boite Mail</span>
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
									
									
									
										
									
									
								</ul>
							</nav>
				
							
				
							
				
							
				
							
						</div>
				
					</div>
				
				</aside>-->
				<!-- end: sidebar -->
	
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Boîte de réception</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Boite Mail</span></li>
								<li><span>Boîte de réception</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<section class="content-with-menu mailbox">
						<div class="content-with-menu-container" data-mailbox data-mailbox-view="folder">
							<div class="inner-menu-toggle">
								<a href="#" class="inner-menu-expand" data-open="inner-menu">
									Afficher Menu <i class="fa fa-chevron-right"></i>
								</a>
							</div>
							
							<menu id="content-menu" class="inner-menu" role="menu">
								<div class="nano">
									<div class="nano-content">
							
										<div class="inner-menu-toggle-inside">
											<a href="#" class="inner-menu-collapse">
												<i class="fa fa-chevron-up visible-xs-inline"></i><i class="fa fa-chevron-left hidden-xs-inline"></i> Cacher Menu
											</a>
							
											<a href="#" class="inner-menu-expand" data-open="inner-menu">
												Afficher Menu <i class="fa fa-chevron-down"></i>
											</a>
										</div>
							
										<div class="inner-menu-content">
											<a href="mailbox-compose" class="btn btn-block btn-primary btn-md pt-sm pb-sm text-md">
												<i class="fa fa-envelope mr-xs"></i>
												Composer
											</a>
							
											<ul class="list-unstyled mt-xl pt-md">
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
													<a href="mailbox-folderEtudiant" class="menu-item active">Boîte de réception <span class="label label-primary text-normal pull-right"><?php
												echo $cmp;?></span></a>
												</li>
												
												<li>
													<a href="mailbox-folderEtudiantE" class="menu-item">Envoyés</a>
												</li>
												
												<li>
													<a href="mailbox-folder.html" class="menu-item">Poubelle</a>
												</li>
											</ul>
							
											<hr class="separator" />
							
											
											
										</div>
									</div>
								</div>
							</menu>
							@foreach ($data as $data)
						    <form method="get" action="mailbox-msgEtudiant">
									@csrf
									
							    <div class="inner-body mailbox-email">
								    <div class="mailbox-email-header mb-lg">
									   <h3 class="mailbox-email-subject m-none text-light">
										
									    </h3>
							
									    <p class="mt-lg mb-none text-md">From <a href="#">Okler Themes</a> to <a href="#">You</a></p>
								    </div>
								    <div class="mailbox-email-container">
									    <div class="mailbox-email-screen">
										    <div class="panel">
											    <div class="panel-heading">
												    <div class="panel-actions">
													   <a href="#" class="fa fa-caret-down"></a>
													   <a href="#" class="fa fa-mail-reply"></a>
													   <a href="#" class="fa fa-mail-reply-all"></a>
													   <a href="#" class="fa fa-star-o"></a>
												    </div>
							
												       <p class="panel-title">Okler Themes <i class="fa fa-angle-right fa-fw"></i> You</p>
											    </div>
											    <div class="panel-body">
												    <p>{{$data->objet}}</p>
							
												    <p>{{$data->message}}</p>
											    </div>
											    <div class="panel-footer">
												    <p class="m-none"><small>{{$data->date}}</small></p>
											    </div>
										    </div>
							            </div>
									</div>
							
									<div class="compose">
										<div id="compose-field" class="compose"><textarea rows=5 class="form-control"></textarea>
										</div>
										<div class="text-right mt-md">
											<a href="#" class="btn btn-primary">
												<i class="fa fa-send mr-xs"></i>
												Send
											</a>
										</div>
									</div>
								</div>
							
							</form>
							@endforeach
						</div>
					</section>
					<!-- end: page -->
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
			
							<div class="sidebar-widget widget-friends">
								
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
		<script src="assets/vendor/summernote/summernote.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body>
</html>