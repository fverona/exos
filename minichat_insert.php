<?php

$req = $bdd->prepare('INSERT INTO chat(pseudo, texte, date_creation) VALUES(:pseudo, :texte, NOW())');

$req->execute ( array('pseudo' => htmlspecialchars($_POST['pseudo']), 'texte' => htmlspecialchars($_POST['texte']) ));

$req->closeCursor();

?>