<?php
/**
 * Class Client
 * 
 * 
 */
class Client {
	
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
	 public function getIdClient($courriel) {
		 
		$requete = "SELECT id_utilisateur
				FROM zm_utilisateur
				WHERE courriel_electronique = '".$courriel."'";
		$result = $this->bdd->query($requete);
		if (!$result) {
			throw new Exception ("L'utilisateur n'existe pas");
		}
		else {
			$idClient = $result->fetch_object();
			return $idClient->id_utilisateur;
		}
	 }
	

}




?>