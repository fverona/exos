<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
   	  <title>blog </title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="../blog.css" />
   </head>
   <body>
   <H1> Le Blog - <em>(Modificarion)</em> - </H1>

<?php

include("../blog.connexion_base_blog.php");


$TAB_BILL=array ($_POST['bill1'], $_POST['bill2'], $_POST['bill3'], $_POST['bill4']);


 if (is_numeric($_POST['billet']))
 { 
 		if (in_array($_POST['billet'], $TAB_BILL))
		{

			$donnees='';

			// affichage du billet à modifier 
 			$req = $bdd->prepare("SELECT id, titre, contenu, DATE_FORMAT(date_creation, '%d/%m/%Y à %Hh%imin%ssec') as date_creation_fr FROM billets where id = :billet ");	
 			
 			$req->execute(array('billet' => $_POST['billet']));	

 			$donnees = $req->fetch();

			?>

			<H1 style="margin-auto"> Modification du billet </H1>	


			<form  action="modification.php" method="post" >
					
  				<H3 class=news style="background-color:blue">Titre</H3>
				
				<textarea class=areasaisie  name="titre" rows="1"><?php echo $donnees['titre']?></textarea> 
			
		   		<H3 class=news style="background-color:blue">Texte</H3>

			   	<textarea  class="areasaisie"  name="contenu" rows="8"><?php echo $donnees['contenu']?></textarea> 
								
				<input class="valider" type="hidden"                        name="billet" value=<?php echo $donnees['id'];?>  /> 
				<input class="valider" style="margin-left:39%;color:green;" type="submit" name="action" value="Abandon"                     /> 
				<input class="valider" style="margin-left:2%"               type="submit" name="action" value="Valider la modification"     /> 
				
				
			</form>
			
		<?php		

		}
		else
		{
		   header('Location:modification.err.php');
		}

 } 
else
		   header('Location:modification.err.php');
	


?>
</body>