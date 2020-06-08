<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
   	  <title>blog </title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="../blog.css" />
   </head>
   <body>
   <H1> Le Blog - <em>(suppression)</em> - </H1>

<?php

include("../blog.connexion_base_blog.php");


$TAB_BILL=array ($_POST['bill1'], $_POST['bill2'], $_POST['bill3'], $_POST['bill4']);


 if (is_numeric($_POST['billet']))
 { 
 		if (in_array($_POST['billet'], $TAB_BILL))
		{

			$donnees='';

			// affichage du billet à suupprimer 
 			$req = $bdd->prepare("SELECT id, titre, contenu, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ssec') as date_creation_fr FROM billets where id = :billet ");	
 			
 			$req->execute(array('billet' => $_POST['billet']));	

 			$donnees = $req->fetch();

 					echo "<div style=\"margin-left:47%\"><strong> Billet n° " . $donnees['id'] . "</strong></div>"; 			
					echo "<H3 class=\"news\">" . htmlspecialchars($donnees['titre']) . " " . $donnees['date_creation_fr'] . "</H3>";
					echo "<p class=\"news\">" .  nl2br(htmlspecialchars($donnees['contenu'])) .  "</p></br>" ;	
			?>
			
			<form action="suppression.php" method="post">
					<input type="hidden" name="abandon" value="abandon"/>	
					<input class="valider" style="margin-left:39%;color:green;" type="submit" name="action" value="Abandon" /> 
					<input class="valider" style="margin-left:2%" type="submit" name="action" value="Valider la suppression" /> 
					<input type="hidden" name="billet" value=<?php echo $_POST['billet']; ?> />	
			</form>

			<?php		

		}
		else
		{
		   header('Location:suppression.err.php');
		}

 } 
else
		   header('Location:suppression.err.php');
	


?>