<?php
 
if(isset($_POST['soumettre'])) {
 
     
 
 
    $email_to = "ricriv7@yahoo.com";
  
     
 
     
 
    function died($error) {
 
        echo utf8_decode("Je suis désolé, il y a un erreur dans le formulaire:")."<br/>";
 
        echo $error."<br /><br />";
 
        echo "SVP corrigez les erreurs et renvoyez le formulaire.<br /><br />";
 
        die();
 
    }
  
    if(!isset($_POST['nom']) ||
 
        !isset($_POST['prenom']) ||
 
        !isset($_POST['courriel']) ||
 
        !isset($_POST['sujet']) ||
 
        !isset($_POST['message'])) {
 
        died('Je suis désolé, mais il y a un problème avec le formulaire.');       
 
    }
 
     
 
    $prenom = $_POST['prenom']; // required
 
    $nom = $_POST['nom']; // required
 
    $courriel_de = $_POST['courriel']; // required
 
    $sujet = $_POST['sujet']; // not required
 
    $message = $_POST['message']; // required
 
     
 
    $message_erreur = "";
 
    $courriel_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($courriel_exp,$courriel_de)) {
 
    $message_erreur .= "L'adresse saisie n'est pas valide.<br />";
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$prenom)) {
 
    $message_erreur .= "Le prénom saisi n'est pas valide.<br />";
 
  }
 
  if(!preg_match($string_exp,$nom)) {
 
    $message_erreur .= "Le nom saisi n'est pas valide.<br />";
 
  }
 
  if(strlen($message) < 2) {
 
    $message_erreur .= "Le message saisi n'est pas valide.<br />";
 
  }
 
  if(strlen($message_erreur) > 0) {
 
    died($message_erreur);
 
  }
 
    $message_fin = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $message_fin .= "Prénom: ".clean_string($prenom)."\n";
 
    $message_fin .= "Nom: ".clean_string($nom)."\n";
 
    $message_fin .= "Courriel: ".clean_string($courriel_de)."\n";
 
    $message_fin .= "Sujet: ".clean_string($sujet)."\n";
 
    $message_fin .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$courriel_de."\r\n".
 
'Reply-To: '.$courriel_de."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $sujet, $message_fin, $headers);  
 
?>
 
 
 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contact - Zaida Melo, Sur mesure, prendre rendez-vous</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
<!-- HEADER
================================================== -->
		<header class="">
            <article class="navbar navbar-default" role="navigation">
              <nav class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div><!--/.navbar-header -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a class="text-info" href="./pages/profil.html">Anglais</a></li>
                        <li><a href="./pages/profil.html">Se connecter</a></li>
                        <li><a href="./pages/profil.html">S'inscrire</a></li>
                        <li class=" btn-default"><a href="./pages/contact.html"><span class="glyphicon glyphicon-shopping-cart"></span> panier</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
              </nav><!--/.container -->
            </article><!--/.navbar -->
            <article class="navbar navbar-inverse" role="navigation">
              <nav class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="../index.html"><img src="../images/logo-ZaidaMelo.png" alt="Zaida Melo, Atelier de mode"></a>
                </div><!--/.navbar-header -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="./pages/profil.html">À propos</a></li>
                        <li class="active" class="dropdown">
                            <a href="./index.html" class="dropdown-toggle" data-toggle="dropdown">Boutique en ligne<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="./index.html">Robe de mariage</a></li>
                                <li><a href="./pages/portfolio_direct.html">Robe de soirée</a></li>
                                <li><a href="./pages/portfolio_web.html">Finissantes</a></li>
                                <li><a href="./pages/portfolio_web.html">Petites princesses</a></li>
                                <li><a href="./pages/portfolio_web.html">Accesoires</a></li>
                            </ul>
                        </li>
                        <li><a href="./pages/profil.html">Sur-mesure</a></li>
                        <li><a href="./pages/profil.html">Actualités</a></li>
                        <li><a href="./pages/contact.html">Contact</a></li>
                    </ul>
                </div><!--/.navbar-collapse -->
              </nav><!--/.container -->
            </article><!--/.navbar -->
        </header>

    <!-- JUMBOTRON
    ================================================== -->
        <!-- jumbotron pour les coordonnées -->
        <article class="jumbotron bg-primary">
			<div class="container">
          		<div class="row">
                	<div class="col-lg-6 col-md-6 col-sm-6">
                        <h2>Contact</h2>
                        <p>
                        Adresse: 2413 Saint-Georges<br/>
                        Longueuil, Québec, J4K-4B1<br/>
                        Téléphone: 450.286.1565<br/>
                        Courriel: info@zm-atelierdemode.ca<br/>
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2795.8543521410593!2d-73.4793791!3d45.5130105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc904cff680bdb3%3A0xe4ccd5873fffecb6!2s2413+Rue+Saint-Georges!5e0!3m2!1sfr!2sca!4v1402621466105" width="300" height="200" frameborder="0" style="border:0"></iframe>
                    </div>
                </div>
			</div>
        </article>
        <br/><br/>
        
    <!-- CONTENU
    ================================================== -->
        <article class="container">
          <!-- Un "row" pour placer les colonnes à l'interieur -->
            <div class="row">
    
    			<!-- Colonne pour le formulaire -->
                <div class="col-md-8 col-sm-8 col-xs-8 col-xs-offset-2">
                    <h2>Merci de votre intérêt.</h2>
					<h3>On vous contacterai bientôt.</h3>
                </div>
                
			</div><!--/.row -->
    
			<hr>
            
            <!--  FOOTER
    ================================================== -->
        <!-- jumbotron pour le téléphone et adresse -->
		<article class="jumbotron bg-primary">
			<div class="container">
            	<!-- Un "row" pour placer les colonnes à l'interieur -->
           		<div class="row">
                	<div class="col-lg-6 col-md-6">
                    	<h2 class="pull-left">450.286.1565 <span class="glyphicon glyphicon-phone-alt"></span></h2>
                    </div>
                    <div class="col-lg-6 col-md-6">
                    	<p class="pull-right text-right">2413 Saint-Georges, <br/>Longueuil (Québec) J4K-4B1</p>
                    </div>
                </div><!--/.row -->
          	</div><!--/.container -->
        </article>
        
        <!-- jumbotron pour le plan du site -->
		<article class="jumbotron bg-danger">
			<div class="container">
            	<div class="row">
                	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <ul class="list-group">
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Boutique en ligne</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Robe de mariage</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Robe de soirée</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Finissantes</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Petites princesses</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Accesoires</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<ul class="list-group">
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Faites sur mesure</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Actualités</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">À propos</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">&nbsp;</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">FAQ</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Politiques</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<ul class="list-group">
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Panier</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Se connecter</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">S'inscrire</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#"> </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#"> </a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#"> </a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    	<ul class="list-group">
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Contact</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Prendre rendez-vous</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">&nbsp;</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Anglais</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">Plan du site</a></li>
                          <li class="list-group-item bg-danger"><a class="text-primary" href="#">&nbsp;</a></li>
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
                <p class="pull-right">Réalisation: Groupe4</p>
			</footer>
        
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.0.min.js"><\/script>')</script>

        <script src="../js/vendor/bootstrap.min.js"></script>

        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>

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
 
?>