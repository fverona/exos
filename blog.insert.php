<?php

$req = $bdd->prepare('INSERT INTO commentaires(id, id_billet, auteur, commentaire, date_commentaire) VALUES(NULL, 21'6', '', '', NOW() )');

$req->execute( array());

$req->closeCursor();

?>
