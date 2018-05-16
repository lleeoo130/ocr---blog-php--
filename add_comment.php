<?php

    include ('php/_debug.php');
    include ('php/_connexion.php');

    // Exemple de requête SQL basique, avec préparation
    // http://php.net/manual/fr/pdo.prepared-statements.php
    
	$db = $db->prepare("
	
    INSERT INTO `commentaire`   (`commentaire_id`, 
                                    `commentaire_billet_id`, 
                                        `commentaire_auteur`, 
                                            `commentaire_contenu`, 
                                                `commentaire_date`)

    VALUES                      (NULL,
                                    :commentaireBilletId, 
                                        :commentairePseudo, 
                                            :commentaireContent, 
                                                CURRENT_TIMESTAMP);
    
    "
    );


// De cette manière, on est certain de ne pas ajouter de code malicieux dans le SQL
$db->bindParam(':commentaireBilletId',  $commentaireBilletId);
$db->bindParam(':commentairePseudo',    $commentairePseudo);
$db->bindParam(':commentaireContent',   $commentaireContent);

try {

    $commentaireBilletId    =   $_GET['billet'];
    $commentairePseudo      =   $_POST['pseudo'];
    $commentaireContent     =   $_POST['commentaire'];
    // Execution du sql
    $db->execute();
}

catch (PDOException $e) {

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

header('refresh: 1, url=commentaires.php?billet='.$commentaireBilletId.'');

?>