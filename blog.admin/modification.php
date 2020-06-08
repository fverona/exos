<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
   	  <title>blog </title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="../blog.css" />
   </head>
   <body>
   <H1> Le Blog - <em>(Modification)</em> - </H1>

<?php


include("../blog.connexion_base_blog.php");



// Modification du billet si validation dans modification.valid.php 
if (isset($_POST['action'])) 
{
	if ( $_POST['action'] != 'Abandon' ) 
   {

	$req = $bdd->prepare('update billets set titre = :titre, contenu = :contenu where id = :billet');

	$req->execute(array('billet' => $_POST['billet'], 'titre' => $_POST['titre'], 'contenu' => $_POST['contenu']));

   }
}



include("../blog.count.tab.billets.php");


if (!isset($_POST['PAGES_BILL']))
{
	$PAGES_BILL=1;
}
else
{
 $PAGES_BILL=$_POST['PAGES_BILL'];	
}	

// calcul nombre de pages des billets (1 pages = 4 billets) 
include("blog.calcul.pages.billets.php");

// chargement des 4 billets par page en fonction du n° de la page  
include("blog.chargement.page.billets.php"); 

//appel du formulaire suppression.valid.php - les postes de la table $TAB_BILL[] contiennent l'Id du billet.  
?>			 
	<form action="modification.valid.php" method="post">
		<p class="suppr">
			<label><strong>  Billet à supprimer ->>  </strong> </label>
			<input type="text" size=1 name="billet" />		    
		    <input type="hidden" name="DEB_PAG" value=<?php echo $DEB_PAG ; ?> />
			<input type="hidden" name="FIN_PAG" value=<?php echo $FIN_PAG ; ?> />

			
			<input type="hidden" name="bill1" value=<?php echo $TAB_BILL[1]; ?> />
			<input type="hidden" name="bill2" value=<?php echo $TAB_BILL[2]; ?> />
			<input type="hidden" name="bill3" value=<?php echo $TAB_BILL[3]; ?> />
			<input type="hidden" name="bill4" value=<?php echo $TAB_BILL[4]; ?> />


			<input class="valider" style="margin-left:2%" type="submit" value="Valider" /> 
		</p>		    
	</form>		
<?php


// gestion de défilement des pages billets 
include("blog.billets.defil.pages.php");


?> 
</body>
