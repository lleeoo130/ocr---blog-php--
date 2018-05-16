<?php 

	// Exemple de requête SQL basique, avec préparation
	// http://php.net/manual/fr/pdo.prepared-statements.php
	$db = $db->prepare("
	
        SELECT * FROM `billet` WHERE `billet_id` = :idBillet

    "
	
	);
	
	// De cette manière, on est certain de ne pas ajouter de code malicieux dans le SQL
	// :orderNumber sera remplacé par sa valeur 'assainie'
	$db->bindParam(':idBillet', $idBillet);


	// Execution de la requête
	$retourRequete = []; // tableau vide

	try {
		// définition des variables à passer dans le SQL de manière saine
		$idBillet = htmlspecialchars($_GET['billet']);

		// Execution du sql
		$db->execute();
		
		// Récupération des données
		while ($ligneSQL = $db->fetch()) {
		    // Chaque ligne SQL renvoyée par la base de donnée est stockée dans une nouvelle case de mon tableau de retour.
			$retourRequete[] = $ligneSQL;
		}
	}
	catch (PDOException $e) {
		
		echo "Erreur lors de l'éxécution d'une requête SQL :";

		//// Affichage plus classique PHP
		// var_dump($e);
		// echo "<table class=\"xdebug-error\">";
		// echo 	$e->xdebug_message;
		// echo "</table><br/>";

		// Affichage personnalisé
		// http://php.net/manual/fr/pdo.errorinfo.php
		
		$errorInfo = $db->errorInfo();
		// var_dump($errorInfo);
		
			// Affiche du message d'erreur uniquement
		echo "	<div class=\"sqlError\">
					<fieldset>
						<legend>Erreur sql ¯\_(ツ)_/¯</legend>
						<div class=\"content\">" . $errorInfo[2] . "</div>
					</fieldset>
				</div>
		";

	}
?>