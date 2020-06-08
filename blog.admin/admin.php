<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Administration du blog</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
  	
	<form action="admin.cible.php" method="post">
		<p>
			<select name="choix">

			    <option value="suppr">Suppression des billets</option>
			    <option value="modif">Modification des billets</option>
			    <option value="saisie" selected="selected" >Saisie des billets</option>  <! -- Option pr défaut -->

			</select>
			
			<p>
				<input type="submit" value="Valider" /> 
			</p>

		</p>		    
	</form>		
		
	</body>
</html>
