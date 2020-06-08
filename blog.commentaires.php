<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
   	  <title>Blog</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="blog.css" />
   </head>
   <body>

   <H1> Le Blog </H1>


<?php

include("blog.connexion_base_blog.php");


// Si l'option valider a été choisie, et si la zone commentairre et auteur sont renseignées, alots écriture du nouveau commentaire. 	
if (isset($_POST['commentaire']) and isset($_POST['auteur']) and isset($_POST['billet']) and $_POST['commentaire'] != '' and $_POST['auteur'] != '') 
{
 include("blog.insert.commentaires.php");
}

// Récupération de la variable $billet si appel venant du GET de blog.php 
if (isset($_GET['billet']))
{

	$billet=htmlspecialchars($_GET['billet']);
}

// Récupération de la variable $billet si appel venant du POST de ce script. 
if (isset($_POST['billet']))
{

	$billet=htmlspecialchars($_POST['billet']);
}


if (!isset($_POST['PAGES_CMT']))
{
	$PAGES_CMT=1;
}
else
{
 $PAGES_CMT=$_POST['PAGES_CMT'];	
}	


if (isset($_GET['billet']) or isset($_POST['billet']))
{	

		// calcul nombre de pages des commentaires par billet (1 pages = 4 commentaires) 
		include("blog.calcul_pages_commentaires.php");

		//  Lecture du billet  

 		$req = $bdd->prepare("SELECT id, titre, contenu, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ssec')  as date_creation_fr  FROM billets where id = $billet ");

		$req->execute(array());
		

		$donnees = $req->fetch();
		{
			if (!empty($donnees))
			{
				echo "<H3 class=\"news\">" . "  " . $donnees['titre'] . " " . $donnees['date_creation_fr'] . "</H3>";
				echo "<p class=\"news\">" .  nl2br(htmlspecialchars($donnees['contenu'])) . "</p></br>" ;

				$billet=$donnees['id'];
			}	
			
			$req->closeCursor();  
		
		}

		// chargement des 4 commentaires par page en fonction du n° de la page  
        include("blog.chargement.page.commentaires.php"); 

        
		// affichage de la fenetre de saisie comentaire + auteur
        include("blog.saisie_commentaires.php"); 


		echo "<br><div class=\"news\" style=\"margin-left:552px\"><em><a href=blog.php>Retour à la page billets</a></em>" . "</div>";
}
?>