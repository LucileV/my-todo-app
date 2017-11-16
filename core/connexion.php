<?php



	try{

	// A changer : dbname=nomDeVotreBaseDeDonnées
	$bdd = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8", $dbuser, $dbpass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) ;
	}
	// On traite l'erreur (ex probleme de mot de passe, php rsique d'afficher
	// toute la ligne. Pour éviter ce problème : )
	catch (Exception $e)
	{
	        die('Erreur : ' . $e->getMessage());
	}
	// Notre requete à la base de donnée
	// SELECT = prend moi; * = tout ;FROM = de quel tableau ? film = mettreLeNomDeVotreTable
	
	

?>