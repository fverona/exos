<?php

$req = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES(:billet, :nome, :texte, NOW())');


$req->execute ( array('billet' => $_POST['billet'], 'nome' => $_POST['auteur'] , 'texte' => $_POST['commentaire'] ));


$req->closeCursor();

?>
