<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
   	  <title>blog</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="blog.css" />
   </head>
   <body>
   <H1> Le Blog </H1>


<?php


	include("blog.connexion_base_blog.php");

	include("blog.count.tab.billets.php");

	if (!isset($_POST['PAGES_BILL']))
	{
		$PAGES_BILL=1;
	}
	else
	{
	 $PAGES_BILL=$_POST['PAGES_BILL'];	
	}	

	// calcul nombre de pages des billets (1 pages = 4 billets) 
	include("./blog.admin/blog.calcul.pages.billets.php");

	// chargement des 4 billets par page en fonction du n° de la page  
	include("./blog.admin/blog.chargement.page.billets.php");

	include("./blog.admin/blog.billets.defil.pages.php");

 ?> 

  </body>
