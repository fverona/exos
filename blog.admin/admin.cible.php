<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Administration du blog</title>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   </head>
   <body>

   <?php	
   

   if ($_POST['choix'] == 'saisie')
   {
   	  
   	  header('Location:blog.saisie_billets.php');

   }

   if ($_POST['choix'] == 'modif')
   {

   	  header('Location:modification.php');

   }

   if ($_POST['choix'] == 'suppr')
   {

   	  header('Location:suppression.php');

   }	

   ?>		
   

   </body>	