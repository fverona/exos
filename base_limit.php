<?php
/*
Quelques exemples :

	LIMIT 0, 20 : affiche les vingt premières entrées ;

	LIMIT 5, 10 : affiche de la sixième à la quinzième entrée ;

	LIMIT 10, 2 : affiche la onzième et la douzième entrée.
*/
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT nom FROM jeux_video LIMIT 0, 10');

echo '<p>Voici les 10 premières entrées de la table jeux_video :</p>';
while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();

?>