
@extends('layout')

@section('content')
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
            {{$countEtudiants}}
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
                                                        <strong class="amount">{{$countEtudiants}}</strong>
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
                                                        <strong class="amount">{{$countEnseignants}}</strong>
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
                                                        <strong class="amount">{{$countDeparts}}</strong>
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
                                                        <strong class="amount">{{$countFilieres}}</strong>
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
@stop
