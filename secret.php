<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Accès aux codes secrets</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>
  	
  		<?php
  		if ($_POST['mot_de_passe'] != 'kangourou')
  		{
  		  include("formulaire.php"); 

  		  echo "Le mot de passe est invalide !";
  		}
  		else
  		{
			echo "le code secret est SERZZI78" ;
			
		?> 
			<p>
				<a href="http://localhost/exos/formulaire.php">exit</a>
			</p>
			
		<?php 
  		}	


  		?>
  	
  </body>
  </html>
