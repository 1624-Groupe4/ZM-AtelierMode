<!--Pour tester la langue par défault de l'utilisateur-->
<?php
if(isset($_GET["lang"])){
	$lang = $_GET["lang"];
}
else{
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	switch ($lang){
		case "fr":
			$lang = "fr";
			break;
		case "en":
			$lang = "en";
			break;      
		default:
			$lang = "fr";
			break;
	}
}


	/*Pour appeler le controlateur*/
	
	$oControleur = new Controler();	
	$oControleur->gerer($lang);
?>
            
