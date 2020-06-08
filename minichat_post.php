<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
   	  <title>Minichat</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="minichat.css" />
   </head>
   <body>

	<?php

	include("trt_err_sql_db_minichat.php"); 

	if (isset($_POST['pseudo']) AND isset($_POST['texte']) and $_POST['pseudo'] != '' and $_POST['texte'] != '') 
	{

	 include("minichat_insert.php"); 

	}

	if ($_POST['pseudo'] =='' or $_POST['texte'] =='')
	{?>				
	
	 <form action="minichat_post.php" method="post">

	   <?php include("minichat_form_input.php"); ?>

	 </form>	

	   <?php echo "<span class=\"msgerr\">" . "Le pseudo et/ou le texte n'ont pas été renseignés" . "</span>";

		include("minichat_select.php"); 
	} 	
	else
	{
	 	header('Location: minichat.php');	
	}
	?>

	</body>		

</html>
