<?php
/**
 * Class Produit
 * 
 * 
 */
class Produit {
	
	private $bdd;

	
    
	function __construct () {
		
		$this->bdd = connexionObjet("e1395225","dbconnect");
		$this->bdd->query("SET NAMES UTF8");
	}
	
	function __destruct ()
	{
		
	}
	
		
	/**
	 * @access public
	 */
	 public function getProduits($lang, $page) {
		 
		$produits =  array();
		$requete = "SELECT nom_produit  AS 'nom',
					   prix_unitaire   AS 'prix',
					   taille  AS 'taille',
					   path  AS 'path',
					   quantite_stock  AS 'stock',
					   qualification_utilisateur  AS 'qualiClients',
					   total_qualification  AS 'totalQuali',
					   description_produit  AS 'desc',
					   couleur  AS 'couleur',
					   tissu  AS 'tissu'
				FROM zm_produit, zm_textproduit, zm_langue, zm_media
				WHERE zm_textproduit.id_langue = zm_langue.id_langue
				AND zm_langue.nom_langue = '".$lang."'
				AND zm_produit.id_produit = zm_textproduit.id_produit
				AND zm_produit.id_produit = zm_media.id_produit
				ORDER BY (qualification_utilisateur / total_qualification) DESC
				Limit 0, 6";
		$result = $this->bdd->query($requete);
		if (!$result) {
			throw new Exception ("Pas de produits à afficher");
		}
		else {
			while($prod = $result->fetch_object()) {
				$produits[] = array(
					"nom" => $prod->nom,
					"desc" => $prod->desc,
					"tissu" => $prod->tissu,
					"taille" => $prod->taille,
					"path" => $prod->path,
					"couleur" => $prod->couleur,
					"prix" => $prod->prix,
					"disponibilite" => ($prod->stock > 0)?"En ligne ou en la boutique":"Disponible sur mesure",
					"quali" => ($prod->totalQuali)?$prod->qualiClients/$prod->totalQuali:0
				);
			}
			return $produits;
		}
	 }
	
	public function getProdsPanier($lang, $idClient="") {
		 
		$produits =  array();
		$requete = "SELECT nom_produit  AS 'nom',
					   prix_unitaire   AS 'prix',
					   taille  AS 'taille',
					   path  AS 'path',
					   quantite_stock  AS 'stock',
					   couleur  AS 'couleur'
				FROM zm_produit, zm_textproduit, zm_langue, zm_panier, zm_media
				WHERE zm_textproduit.id_langue = zm_langue.id_langue
				AND zm_langue.nom_langue = '".$lang."'
				AND zm_produit.id_produit = zm_textproduit.id_produit
				AND zm_produit.id_produit = zm_panier.id_produit
				AND zm_panier.id_utilisateur = '".$idClient."'
				AND zm_produit.id_produit = zm_media.id_produit
				";
		$result = $this->bdd->query($requete);
		if (!$result) {
			throw new Exception ("Pas de produits à afficher");
		}
		else {
			$prixTotal = 0;
			while($prod = $result->fetch_object()) {
				$produits[] = array(
					"nom" => $prod->nom,
					"taille" => $prod->taille,
					"path" => $prod->path,
					"couleur" => $prod->couleur,
					"prix" => $prod->prix,
					"stock" => $prod->stock,
					"tps" => $prod->prix*0.05,
					"tvq" => $prod->prix*0.09975,
					"sousTotal" => $prod->prix*1.14975
				);
				$prixTotal += $prod->prix*1.14975;
			}
			$produits["prixTotal"] = round($prixTotal, 2);
			return $produits;
		}
	 }
}




?>