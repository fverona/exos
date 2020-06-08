<?php

/*
============================================================
   Récupération du nombre de ligne de la table commentaires
============================================================
*/
$req = $bdd->prepare("SELECT count(*) from commentaires where id_billet = $billet");

$req->execute(array());

$NB_COMT = $req->fetch();

?>