<?php
/**
 * Class Controler
 * Gère les requêtes HTTP
 * 
 * @author Jonathan Martel
 * @version 1.0
 * @update 2013-12-10
 * @license Creative Commons BY-NC 3.0 (Licence Creative Commons Attribution - Pas d’utilisation commerciale 3.0 non transposé)
 * @license http://creativecommons.org/licenses/by-nc/3.0/deed.fr
 * 
 */

class Controler 
{
	
		/**
		 * Traite la requête
		 * @return void
		 */
		public function gerer($lang)
		{
			switch ($_GET['page']) {
				case 'accueil':
					$page = "accueil";
					$this->accueil($lang, $page);
					break;
				default:
					$page = "accueil";
					$this->accueil($lang, $page);
					break;
			}
		}
		
		
		private function accueil($lang, $page)
		{
			$oProduit = new Produit();
			/*Si la session n'existe pas créer un client anonime*/
			
			$oClient = new Client();
			$oVue = new Vue();
			switch ($lang) {
				case 'fr':
					$title = "Zaida Melo - Atelier de mode, design de mode, Montréal, Rive-sud";
					$description = "";
					$keywords = "";
					break;
				case 'en':
					$title = "Zaida Melo - Fashion store, fashion design, Montreal, South Shore";
					$description = "";
					$keywords = "";
					break;
				default:
					$title = "Zaida Melo - Atelier de mode, design de mode, Montréal, Rive-sud";
					$description = "";
					$keywords = "";
					break;
			}
			$courriel = "jcguzmiel@gmail.com";
			$produits = $oProduit->getProduits($lang, "accueil");
			$idClient = $oClient->getIdClient($courriel);
			$prodsPanier = $oProduit->getProdsPanier($lang, $idClient);
			$oVue->afficheHeader($lang, $title, $description, $keywords);
			$oVue->afficheAccueil($lang, $produits);
			$oVue->chargerPanier($lang, $prodsPanier);
			$oVue->afficheFooter($lang);
			
		}
		
}
?>















