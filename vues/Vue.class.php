<?php
/**
 * Class Vue
 * Template de classe Vue. Dupliquer et modifier pour votre usage.
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-11
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */


class Vue {
	
	/**
	 * Affiche le header pour toutes les pages
	 * @access public
	 * 
	 */
	
	public function afficheHeader($lang, $title, $description, $keywords) {
	?>
	<!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <html lang="<?=$lang?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$title?></title>
        <meta name="description" content="<?=$description?>">
        <meta name="keywords" content="<?=$keywords?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"><!-- ligne pour ajouter les icons pour reseaux sociaux 
================================================== -->

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
<!-- HEADER
================================================== -->
		<header >
            <article class="navbar navbar-default" role="navigation">
              <nav class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseUn">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div><!--/.navbar-header -->
                <div class="navbar-collapse collapse" id="collapseUn">
                    <ul class="nav navbar-nav pull-right">
                        <li><a class="text-info" href="#">Anglais</a></li>
                        <li><a class="text-primary" href="#session" data-toggle="modal" data-target="#session">Se connecter</a></li><!--Modal Se connecter -->
                        <li><a class="text-info" href="#inscrire" data-toggle="modal" data-target="#inscrire"> S'inscrire</a></li><!--Modal S'inscrire -->
                        <li class="btn-default"><a href="#panier" data-toggle="modal" data-target="#panier"><span class="glyphicon glyphicon-shopping-cart"></span> panier</a></li><!--Modal Panier -->
                    </ul>
                </div><!--/.navbar-collapse -->
              </nav><!--/.container -->
            </article><!--/.navbar -->
            <article class="navbar navbar-inverse" role="navigation">
              <nav class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseDeux">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="./index.html"><img src="./images/logo-ZaidaMelo.png" alt="Zaida Melo, Atelier de mode"></a>
                </div><!--/.navbar-header -->
                <div class="navbar-collapse collapse" id="collapseDeux">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="./pages/apropos.html">À propos</a></li>
                        <li class="dropdown">
                            <a href="./pages/RobeMariage.html" class="dropdown-toggle" data-toggle="dropdown">Boutique en ligne<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="./pages/RobeMariage.html">Robe de mariage</a></li>
                                <li><a href="./pages/RobeSoiree.html">Robe de soirée</a></li>
                                <li><a href="./pages/Finissantes.html">Finissantes</a></li>
                                <li><a href="./pages/Petites.html">Petites princesses</a></li>
                                <li><a href="./pages/Accesoires.html">Accesoires</a></li>
                            </ul>
                        </li>
                        <li><a href="./pages/SurMesure.html">Sur-mesure</a></li>
                        <li><a href="./pages/Actualites.html">Actualités</a></li>
                        <li><a href="./pages/contact.html">Contact</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
              </nav><!--/.container -->
            </article><!--/.navbar -->
        </header>
		<?php
	}

	/**
	 * Affiche la page d'accueil 
	 * @access public
	 * 
	 */
	public function afficheAccueil($lang, $produits) {
		?>
        
		 <!-- CARROUSEL
    ================================================== -->
        <article id="carousel-accueil" class="carousel slide fond" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-accueil" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-accueil" data-slide-to="1"></li>
                <li data-target="#carousel-accueil" data-slide-to="2"></li>
            </ol>
    
            <!-- Conteneur pour les items à l'interieur du carrousel -->
            <div class="carousel-inner">
                <div class="item active">
                	<div class="row">
                        <img class="col-lg-6 col-md-6 col-sm-6 col-xs-6" src="./images/PretPorter-01.png" alt="Prêt à porter">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h1 class="text-primary"><?= ($lang == "fr")? "Prêt à porter" : "Ready-to-wear" /*le titre change selon la langue*/?></h1>
                            <p class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            	<?= ($lang == "fr")?
								/*Texte en français*/
								"Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"
								/*Texte en anglais*/
								: "Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                	<div class="row">
                        <img class="col-lg-6 col-md-6 col-sm-6 col-xs-6" src="./images/Mariage-01.png" alt="Robes de mariage">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h1 class="text-primary"><?= ($lang == "fr")? "Robes de mariage" : "Wedding dresses" /*le titre change selon la langue*/?></h1>
                            <p class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            	<?= ($lang == "fr")?
								/*Texte en français*/
								"Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"
								/*Texte en anglais*/
								: "Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                	<div class="row">
                        <img class="col-lg-6 col-md-6 col-sm-6 col-xs-6" src="./images/Soiree-02.png" alt="Robes de soirée">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <h1 class="text-primary"><?= ($lang == "fr")? "Robes de soirée" : "Evening dresses" /*le titre change selon la langue*/?></h1>
                            <p class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                            	<?= ($lang == "fr")?
								/*Texte en français*/
								"Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"
								/*Texte en anglais*/
								: "Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"?>
                            </p>
                        </div>
                    </div>
                </div>
            </div><!--/.carousel-inner -->
    
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-accueil" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-accueil" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </article><!--/#carousel-accueil -->
    
    <? $this->afficheRendezVous($lang); /*pour afficher le jumbotron qu'incite les clients à prendre un rendez-vous*/?>
        
    <!-- CONTENU
    ================================================== -->
        <main class="container">
          <!-- Un "row" pour placer les colonnes à l'interieur -->
            <div class="row">
            	<h1 class="text-center text-primary"><?= ($lang == "fr")? "Robes en vedette" : "Best in dresses" /*le titre change selon la langue*/?></h1>
                <p class="text-center col-lg-8 col-xs-offset-2">
                	<?= ($lang == "fr")?
						/*Texte en français*/
						"Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"
						/*Texte en anglais*/
						: "Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"?>
                	<br/><br/>
                </p>
                
                <?php
					$modAccueil = 1; /*Variable pour avoir un id différent pour chaque modal*/
					foreach($produits as $prod){
				?>
                
                <!-- Un "modal" pour afficher la description de chaque produit -->
                <article class="modal fade" id="<?= "#mod_accueil_".$modAccueil; ?>" role="dialog" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <article class="modal-body row">
                            	<div class="col-lg-6 col-md-6">
                                	<img src="<?= $prod["path"] ?>" alt="<?= $prod["nom"] ?>" >
                                </div>
                                <div class="col-lg-6 col-md-6">
                                	<h3><?=$prod["nom"]?></h3>
                                    <p>
                                    <?=$prod["desc"]?>
                                    </p>
                                	<ul class="list-group">
                                          <li class="list-group-item"><strong>Tissu: </strong><?=$prod["tissu"]?></li>
                                          <li class="list-group-item"><strong>Taille: </strong><?=$prod["taille"]?></li>
                                          <li class="list-group-item"><strong>Couleurs: </strong><?=$prod["couleurs"]?></li>
                                          <li class="list-group-item"><strong>Broderie: </strong><?=$prod["broderie"]?></li>
                                          <li class="list-group-item"><strong>Disponibilité: </strong><?=$prod["disponibilite"]?></li>
                                    </ul>
                                    <h1 class=" text-primary"><?=$prod["prix"]?>/h1>
                                    <div class="btn btn-default btn-sm"><?= ($lang == "fr")? "Ajouter au panier " : "Add to shopping cart" /*le bouton change selon la langue*/?>
										<span class="glyphicon glyphicon-shopping-cart" ></span></div>
                                    <br/><br/>
                                    <p><?= ($lang == "fr")? "Qualification des clients: " : "Client's qualification: " /*le texte change selon la langue*/?> </p>
                                    <div class="text-primary">
                                    <!--pour afficher la qualification des utilisateurs-->
                                    <?php
									/*on affiche les étoiles correspondant à la qualification*/
										if(!$prod["quali"]){
											echo "<p class='text-info'>Qualification non disponible</p>"; /*sino on affiche cette mesage*/
										}
										else{
											for($i=0; $i<5; $i++){
												if($i < $prod["quali"]){
													echo "<span class='glyphicon glyphicon-star'></span>";
												}
												else{
													echo "<span class='glyphicon glyphicon-star-empty'></span>";
												}
											}
										}
									?>
                                    </div>
                                </div>
                                <button type="button" class="close modal-backdrop pull-right" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </article>
                            <footer class="modal-footer">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><?= ($lang == "fr")? "Fermer" : "Close" /*le bouton change selon la langue*/?></button>
                            </footer>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </article><!-- /.modal -->
    
    			<!-- thumbnail pour chaque produit -->
                <div class="col-md-4 col-sm-6">
                    <img class="img-thumbnail" src="<?= $prod["path"] ?>" alt="<?= $prod["nom"] ?>">
                    <p class=" panel-footer bg-primary"><?= $prod["nom"] ?>
                    	<a class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="<?= "#mod_accueil_".$modAccueil; ?>" role="button"><?= ($lang == "fr")? "Détails" : "Details" /*le bouton change selon la langue*/?><span class="glyphicon glyphicon-chevron-right"></span></a>
                        <span class="pull-right">&nbsp;</span>
                                       <!-- Reseaux sociaux 
================================================== -->
                        
                        <a   class="btn btn-default btn-xs pull-right"   target="_blank" title="Facebook"    href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fwebsite.com&t=Url%20Encoded%20Text"   data-toggle="modal" role="button" ><i class="fa fa-facebook fa-sm fb"></i></a>
                        <span class="pull-right">&nbsp;</span>
                        <a   class="btn btn-default btn-xs pull-right"  target="_blank" title="j'aime" href="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwebsite.com" data-toggle="modal" role="button"><i class="fa fa-thumbs-o-up fa-sm fb"></i></a>
                        
                         <span class="pull-right">&nbsp;</span>
                        <a class="btn btn-default btn-xs pull-right" target="_blank"    title="Pin It"    href="http://www.pinterest.com/pin/create/button/?url=_URL_&description=_DESCRIPTION_&media=_URL_TO_IMAGE_" data-toggle="modal" role="button"><i class="fa fa-pinterest fa-sm pinterest"></i></a>    
                        <span class="pull-right">&nbsp;</span>
                        <a class="btn btn-default btn-xs pull-right" data-toggle="modal" data-target="#" role="button"><span class=" glyphicon res-social-sm favori"></span></a>
                                       <!-- Fin reseaux sociaux 
================================================== -->
                    </p>
                </div>
                <?php
					$modAccueil++;
					}		/*fin foreach produits */
				?>
			</div><!--/.row -->
		</main> <!-- /container -->
        
        <br/><br/><br/><br/>
		<?php
		
	}
	
	public function afficheRendezVous($lang) {
		?>
	
	    <!-- JUMBOTRON RENDEZ-VOUS
    ================================================== -->
		<article class="jumbotron bg-primary">
			<div class="container text-center">
				<h1><?= ($lang == "fr")? "Votre robe sur mesure" : "Bespoke dress" /*le h1 change selon la langue*/?></h1>
				<p>
                <?= ($lang == "fr")?
					/*Texte en français*/
					"Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens, lipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"
					/*Texte en anglais*/
					: "Ipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens, lipsum lorem darling space texte dayus infre gtd a estrubg, lamin derhiuy seriun martens"?>
                </p>
				<p><a class="btn btn-default btn-sm" href="./pages/SurMesure.html" role="button">
				<?= ($lang == "fr")? "Prendre rendez-vous" : "Make un appointment" /*le bouton change selon la langue*/?> &nbsp;
                <span class="glyphicon glyphicon-calendar"></span></a></p>
          </div>
        </article>
        
        <br/><br/><br/>
		
		<?php
		
	}
	
	public function afficheFooter($lang) {
		?>
	 <!--  FOOTER
    ================================================== -->
        <!-- jumbotron pour le téléphone et adresse -->
		<article class="jumbotron bg-primary">
			<div class="container">
            	<!-- Un "row" pour placer les colonnes à l'interieur -->
           		<div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    	<h2 class="text-center">450.286.1565 <span class="glyphicon glyphicon-phone-alt"></span></h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    	<p class="text-center">2413 Saint-Georges, <br/>Longueuil (Québec) J4K-4B1</p>
                    </div>
                </div><!--/.row -->
          	</div><!--/.container -->
        </article>
        
        <!-- jumbotron pour le plan du site -->
		<article class="jumbotron bg-danger" id="footer">
			<div class="container">
            	<div class="row">
                	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <ul class="list-group">
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/RobeMariage.html">
                          <?= ($lang == "fr")? "Boutique en ligne" : "Boutique online" /*le texte change selon la langue*/?> 
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/RobeMariage.html">
                          <?= ($lang == "fr")? "Robe de mariage" : "Wedding Dresses" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/RobeSoiree.html">
                          <?= ($lang == "fr")? "Robe de soirée" : "Evening Dresses" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/Finissantes.html">
                          <?= ($lang == "fr")? "Finissantes" : "Prom Dresses" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/Petites.html">
                          <?= ($lang == "fr")? "Petites princesses" : "Little Princesses" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/Accesoires.html">
                          <?= ($lang == "fr")? "Accesoires" : "Accesories" /*le texte change selon la langue*/?>
                          </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<ul class="list-group">
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/SurMesure.html">
                          <?= ($lang == "fr")? "Faites sur mesure" : "Made to measure" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/Actualites.html">
                          <?= ($lang == "fr")? "Actualités" : "Actualities" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/apropos.html">
                          <?= ($lang == "fr")? "À propos" : "About us" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">&nbsp;</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/faq.html">FAQ</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/politiques.html">
                          <?= ($lang == "fr")? "Politiques" : "Policies" /*le texte change selon la langue*/?>
                          </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<ul class="list-group">
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#panier" data-toggle="modal" data-target="#panier">
                          <?= ($lang == "fr")? "Panier" : "Shopping cart" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#session" data-toggle="modal" data-target="#session">
                          <?= ($lang == "fr")? "Se connecter" : "Sign In" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#inscrire" data-toggle="modal" data-target="#inscrire">
                          <?= ($lang == "fr")? "S'inscrire" : "Sign Up" /*le texte change selon la langue*/?>
                          </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<ul class="list-group">
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/contact.html">
                          <?= ($lang == "fr")? "Contact" : "Contact" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="./pages/SurMesure.html">
                          <?= ($lang == "fr")? "Prendre rendez-vous" : "Make un appointment" /*le texte change selon la langue*/?>
                          </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">&nbsp;</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="<?= ($lang == "fr")? "./index?page='accueil'&lang='en'" : "./index?page='accueil'&lang='fr'"
						  																							/*le lien change selon la langue*/?>">
                          <?= ($lang == "fr")? "Anglais" : "French" /*le texte change selon la langue*/?>
                          </a></li>
                        </ul>
                    </div>
                </div>
          </div><!--/.container -->
        </article>
        <hr class="bg-primary"/>
        
        <!-- jumbotron pour les réseaux sociaux -->
		<article class="jumbotron bg-danger">
			<div class="container text-center">
                <a class="btn btn-default btn-sm" data-target="#" role="button"><span class=" glyphicon res-social-md facebook"></span></a>
                <span class="">&nbsp;&nbsp;&nbsp;</span>
                <a class="btn btn-default btn-sm" data-target="#" role="button"><span class=" glyphicon res-social-md twitter"></span></a>
                <span class="">&nbsp;&nbsp;&nbsp;</span>
                <a class="btn btn-default btn-sm" data-target="#" role="button"><span class=" glyphicon res-social-md instagram"></span></a>
                <span class="">&nbsp;&nbsp;&nbsp;</span>
                <a class="btn btn-default btn-sm" data-target="#" role="button"><span class=" glyphicon res-social-md youtube"></span></a>
                <span class="">&nbsp;&nbsp;&nbsp;</span>
          	</div><!--/.container -->
        </article>
        
        <br/><br/>
                
         <!-- Droits d'auteur -->
            
			<footer class="container">
				<p class="pull-left">&copy; Zaida Melo, Atelier de mode, 2014</p>
                <p class="pull-right">
                <?= ($lang == "fr")? "Réalisation: Groupe4" : "Developed by: Groupe4" /*le texte change selon la langue*/?>
                </p>
			</footer>
            
        <!-- Modal se connecter-->
    <article class="modal fade" id="session" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <article class="modal-body row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <h3  class="text-primary">
                                <?= ($lang == "fr")? "Ouvrir une session" : "Sign In" /*le texte change selon la langue*/?>
                                </h3>
                                <hr class="bg-primary"/>
                                <br/>
                                <form role="form">
                                    <div class="form-group">
                                        <label for="Email">
                                        <?= ($lang == "fr")? "Courriel" : "Email" /*le label change selon la langue*/?>
                                        </label>
                                        <input type="email" class="form-control" id="Email" placeholder="<?= ($lang == "fr")? "Entrez votre courriel" : "Enter your email"?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password"><?= ($lang == "fr")? "Mot de pass" : "Password" /*le label change selon la langue*/?>
                                        </label>
                                        <input type="password" class="form-control" id="password" placeholder="<?= ($lang == "fr")? "Mot de pass" : "Password"?>">
                                    </div>
                                    <div class="">
                                        <a class="small "> 
                                        <?= ($lang == "fr")? "Mot de passe oublié?" : "Forgotten password?" /*le texte change selon la langue*/?>
                                        </a>    
                                    </div>
                                    <div class="checkbox">
                                        <label class="small" for="SessionOuverte">
                                            <input type="checkbox" id="SessionOuverte">
                                            <?= ($lang == "fr")? "Garder ma session ouverte" : "Keep my session opened" /*le texte change selon la langue*/?>
                                        </label>
                                    </div>
                                      <button type="submit" class="btn btn-default btn-primary">
                                      <?= ($lang == "fr")? "Se connecter" : "Sign In" /*le bouton change selon la langue*/?>
                                      </button>
                                </form>
                            </div>   
                            <div class="col-sm-6 col-xs-12 text-left">
                                <h3  class="text-primary">
                                <?= ($lang == "fr")? "Créer un compte" : "Create an account" /*le texte change selon la langue*/?>
                                </h3>
                                <hr class="bg-primary"/>
                                <br/>
                                <p class="small text-justify"> 
                                <?= ($lang == "fr")?
								/*Français*/
								"Vous n’avez pas de compte? Créez en un pour faire le suivi de vos achats, consulter l’historique de vos commandes et recevoir des offres exclusives et nos derniéres tendances.  <strong>L’inscription est simple et gratuite!"
								/*Anglais*/
								: "You don't have an account? Create one right now so you can track your purchases, check your buying history, receive our exclusives offers and the latest trends. <strong> It's simple and free!"?>
                                </strong></p>
                                <button class="btn btn-default btn-primary" data-dismiss="modal" href="#inscrire" data-toggle="modal" data-target="#inscrire">
                                <?= ($lang == "fr")? "Créer un compte" : "Create an account" /*le bouton change selon la langue*/?>
                                </button>
                            </div>
                            <button type="button" class="close modal-backdrop pull-right" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
                        </div>
                        <br/>
                    </div>
                </article>
            </div>
        </div>
    </article><!--/Se connecter -->
    <!-- Modal Creer un compte-->
    <article class="modal fade" id="inscrire" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                <article class="modal-body row">
                    <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                        <div class="row">
                            <h3  class="text-primary">Créer un compte
                            <?= ($lang == "fr")? "Créer un compte" : "Create an account" /*le texte change selon la langue*/?>
                            </h3>
                            <hr class="bg-primary"/>
                            <br/>
                                <form role="form">
                                    <div class="form-group">
                                        <label for="prenom">
                                        <?= ($lang == "fr")? "Prénom" : "First name" /*le label change selon la langue*/?>
                                        </label>
                                        <input type="text" class="form-control" id="prenom">
                                    </div>
                                    <div class="form-group">
                                        <label for="nom">Nom
                                        <?= ($lang == "fr")? "Nom" : "Last name" /*le label change selon la langue*/?>
                                        </label>
                                        <input type="text" class="form-control" id="nom">
                                    </div>
                                    <div class="form-group">
                                        <label for="courriel">
                                        <?= ($lang == "fr")? "Courriel" : "Email" /*le label change selon la langue*/?>
                                        </label>
                                        <input type="email" class="form-control" id="courriel" placeholder="<?= ($lang == "fr")? "Entrez courriel" : "Enter email"?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password
                                        <?= ($lang == "fr")? "Mot de passe" : "Password" /*le label change selon la langue*/?>
                                        </label>
                                        <input type="password" class="form-control" id="password" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword">
                                        <?= ($lang == "fr")? "Confirmer le Password" : "Password confirmation" /*le label change selon la langue*/?>
                                        </label>
                                        <input type="password" class="form-control" id="exampleInputPassword">
                                    </div>
                                    <div class="checkbox">
                                        <label class="small" for="recevoir">
                                            <input type="checkbox" id="recevoir">
                                            <?= ($lang == "fr")? "Recevoir des offres exclusives et nos derniéres tendances." : "I want to receive the latest trends and exclusives offers" /*le texte change selon la langue*/?>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-default btn-primary">
                                    <?= ($lang == "fr")? "Créer un compte" : "Create an account" /*le bouton change selon la langue*/?>
                                    </button>
                                </form>
                        </div>   
                        <button type="button" class="close modal-backdrop pull-right" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
                        <br/>
					</div>
                </article>
            </div>
        </div>
    </article><!--/creer compte -->        
        
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
	<?php
		
	}
	
	public function chargerPanier($lang, $prodsPanier) {
	?>
            <!-- Modal panier -->
    <article class="modal fade" id="panier" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content">
                    <article class="modal-body">
                    	<div class="row">
                            <h2 class="text-primary text-center">
                            <?= ($lang == "fr")? "Mon Panier" : "My shopping cart" /*le titre change selon la langue*/?>
                            </h2>
                            
                            <?php
                                foreach($prodsPanier as $cle => $prod){
									if($cle !== "prixTotal"){
                            ?>
                            <div class="col-xs-12"><!--Div pour chaque produit -->
                            <br/>
                            <hr class="bg-primary"/>
                            <br/>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <img src="<?= $prod["path"]?>" alt="<?= $prod["nom"]?>" >	
                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <div class="row">
                                        <div class="col-sm-6 col-xs-12">
                                            <h3><?= $prod["nom"]?></h3>
                                            <hr class="bg-info"/>
                                            <p><strong><?= ($lang == "fr")? "Taille: " : "Size:" /*le texte change selon la langue*/?></strong> <?= $prod["taille"] ?></p>
                                            <hr class="bg-info"/>
                                            <p><strong><?= ($lang == "fr")? "Couleur: " : "Color:" /*le texte change selon la langue*/?></strong><?= $prod["couleur"] ?></p>
                                            <p class="small text-right text-info">
                                                <span class="<?= ($prod["stock"])? "glyphicon glyphicon-ok" : "glyphicon glyphicon-remove" /*pour vérifier la cantité disponible*/?>">
                                                </span> <?= ($lang == "fr")? "En stock " : "In stock" /*le texte change selon la langue*/?>
                                            </p>
                                            <p  class="small" ><?= ($lang == "fr")? "Quantité: " : "Quantity:" /*le texte change selon la langue*/?> </p>
                                            <div class="input-group input-group-sm ">
                                                <span class="btn btn-default input-group-addon glyphicon glyphicon-minus"></span>
                                                <input type="text" class="form-control text-center" placeholder="1">
                                                <span class="btn btn-default input-group-addon glyphicon glyphicon-plus"></span>
                                            </div>
                                            <br />
                                            <a class="btn btn-default btn-xs"><span class="glyphicon glyphicon-remove text-primary"></span> Supprimer</a>
                                        </div>
                                        <div class="col-sm-6 col-xs-12 text-right">
                                        	<br/>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <span class="badge"><?=$prod["prix"]?>$</span>
                                                    <?= ($lang == "fr")? "Prix: " : "Price:" /*le texte change selon la langue*/?>&nbsp;
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge"><?=$prod["tps"]?>$</span>
                                                    TPS:&nbsp;
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge"><?=$prod["tvq"]?>$</span>
                                                    TVQ:&nbsp;
                                                </li>
                                            </ul>
                                        </div>
                                        <button type="button" class="close modal-backdrop pull-right" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
                                    </div>
                                </div>
                                <br/>
                            </div><!--/Div chaque produit -->
                            <?php
									}
                                }/*Fin foreach $client->getPanier()*/
                            ?>
                    </div><!--/row-->
                </article>
                <footer class="modal-footer">
                    <div class="col-sm-12">
                    <hr class="bg-primary"/>
                        <h1 class="text-primary">Total: <?= $prodsPanier["prixTotal"] ?>$</h1>
                        <button class="btn btn-default btn-primary"><?= ($lang == "fr")? "Passer à la caisse" : "Check out" /*le bouton change selon la langue*/?></button>
                        <br/><br/>
                    </div>
                </footer>
            </div>
        </div>

    </article><!--/modal panier-->
    
    <?php
	}

}
?>