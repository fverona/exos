<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Réception de paramètres dans l'URL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
  	<p>
    Cette page ne contient que du HTML.<br />
    Veuillez taper votre prénom :
	</p>

	<form action="formulaire_text_cible.php" method="post">
		<p>
			<input type="text" name="prenom" />		    
			<input type="submit" value="Valider" /> 
			
			<!-- le champ input de type=submit permet de créer le bouton de validation du formulaire qui commande l'envoi des données -->

		</p>		    
	</form>		
		
	</body>
</html>
