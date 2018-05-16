<?php

    include ('php/_debug.php');
    include ('php/_connexion.php');
    $title      = $_GET['title'];
    $content    = $_GET['content'];
    $author    = $_GET['author'];


    // Exemple de requête SQL basique, avec préparation
	// http://php.net/manual/fr/pdo.prepared-statements.php
	$db = $db->prepare("
	
    INSERT INTO `billet`    (`billet_id`, 
                                `billet_titre`, 
                                    `billet_contenu`, 
                                        `billet_date`,
                                            `billet_auteur`) 
                VALUES      (NULL, 
                                :title, 
                                    :content, 
                                        CURRENT_TIMESTAMP,
                                            :author);"

);

// De cette manière, on est certain de ne pas ajouter de code malicieux dans le SQL
// :title et :content seront remplacé par sa valeur 'assainie'
$db->bindParam(':title', $title);
$db->bindParam(':content', $content);
$db->bindParam(':author', $author);

try {
    // Execution du sql
    $db->execute();
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
header('refresh: 0, url=index.php');
?>