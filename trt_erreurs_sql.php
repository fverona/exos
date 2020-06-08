<?php
try
{
// Connexion à la base de donnée avec prise en charge des erreurs éventuelles 
$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
			{
	        die('Erreur : '.$e->getMessage());
			}


?>