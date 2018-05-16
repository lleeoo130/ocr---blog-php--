<?php
    
	$host 		= "localhost";
	$user 		= "root";
	$pass 		= "";
	$dbname 	= "ocr_blog";

	try {

		// Création du PDO, si besoin (singleton)
		// http://php.net/manual/fr/pdo.connections.php
		$db = new PDO('mysql:host=' . $host . ';dbname='. $dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));

		// Configuration de la gestion des erreurs
		// http://php.net/manual/fr/pdo.error-handling.php
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		// Gestion de l'encodage
		// https://stackoverflow.com/questions/8002822/pdo-and-utf-8-special-characters-in-php-mysql
		$db->exec("SET NAMES 'utf8';");

		// echo "connexion réussie";
	}

	// Erreur lors de la connexion à la base de données
	catch (PDOException $e) {

		// Affichage de l'erreur
		echo "Erreur lors de la connexion a la base de données :<br />";
		echo "<pre>" . $e->getMessage() . "</pre><br/>";

		// On arrête le code
		die();
	}

?>