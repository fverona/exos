<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
   	  <title>Blog</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="../blog.css" />
   </head>
   <body>


	        <!--   ===============================================
		           Affichage de la fenêtre de saisie des billets
	              ===============================================
	        -->

	   		<H1> Le Blog - <em>(Saisie des billets)</em> - </H1>

			<form action="blog.saisie_billets.php" method="post" >

				<H3 class=news style="background-color:blue">Titre</H3>
				
				<textarea class=areasaisie  name="titre"   rows="1"></textarea> 
		   	
	  			<H3 class=news style="background-color:blue">Texte</H3>
			   	
			   	<textarea class=areasaisie name="contenu" rows="8"></textarea> 

				<input class="valider" style="margin-left:25%"              type="submit" name="action" value="Valider"/>
				<input class="valider" style="margin-left:2%;color:green;"  type="submit" name="action" value="Abandon"/>
				
			</form>
   		


		<?php 

		if (isset($_POST['action']) and $_POST['action'] == 'Valider' ) 
		{
			
			if (isset($_POST['contenu']))
			{	
	   		    // Ecriture du nouveau billet après post sur cette même page 
				
				if ($_POST['contenu'] != '' and $_POST['titre'] != '')
					
				{	
					include("../blog.connexion_base_blog.php"); 
						
					$req = $bdd->prepare('INSERT INTO billets(titre, contenu, date_creation) VALUES(:titre, :contenu, NOW())');	

					$req->execute ( array('titre' => $_POST['titre'], 'contenu' => $_POST['contenu'] ));

					$req->closeCursor();

					echo "<H1 style=\"margin-auto\"><strong> Nouveau billet crée " . "</strong></H1>";
					echo "<H3 class=\"news\">" .  htmlspecialchars($_POST['titre']) . "</H3>";
					echo "<p  class=\"news\">" .  nl2br(htmlspecialchars($_POST['contenu'])) .  "</p></br>" ;

				}
			}	
		}
		
		else
		
		{
			$titre=''; $contenu='';	
		}

		reset($_POST);

		?> 

	</body>