<?php 

	// Exemple de requête SQL basique, avec préparation
	// http://php.net/manual/fr/pdo.prepared-statements.php
	$db = $db->prepare("
	
	SELECT * FROM `billet` ORDER BY `billet`.`billet_id` DESC LIMIT 4
	
	");

	// Execution de la requête
	$articles = []; // tableau vide

	try {
		// Execution du sql
		$db->execute();
		
		// Récupération des données
		while ($ligneSQL = $db->fetch()) {
		    // Chaque ligne SQL renvoyée par la base de donnée est stockée dans une nouvelle case de mon tableau de retour.
			$articles[] = $ligneSQL;
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