<?php

/*
=======================================================
   Récupération du nombre de ligne de la table billets
=======================================================
*/
$req = $bdd->prepare("SELECT count(*) from billets");

$req->execute(array());

$NB_COMT = $req->fetch();

$req->closeCursor(); 

?>