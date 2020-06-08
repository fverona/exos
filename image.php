<?php
    
  header ("Content-type: image/png");

  $image = imagecreate(400,477); /* x, y le point (0,0) est en haut à gauche de l'image */ 

 	$orange = imagecolorallocate($image, 255, 128, 0); /* la première fonction imagecolorallocate définit la couleur de fond */ 


	$bleu = imagecolorallocate($image, 0, 0, 255);
	$bleuclair = imagecolorallocate($image, 156, 227, 254);
	$noir = imagecolorallocate($image, 0, 0, 0);
	$blanc = imagecolorallocate($image, 255, 255, 255);

	$police=5; /* Valeurs de 1 à  5 */
	$texte_a_ecrire="Calasetta";
	
	//Elle écrit le texte horizontalement  
	$x=132;$y=32;
	$couleur=$noir;
	imagestring($image, $police, $x, $y, $texte_a_ecrire, $couleur);


	//Elle écrit le texte verticalement 
	$x=342;$y=270;
	$couleur=$noir;
	imagestringup($image, $police, $x, $y, $texte_a_ecrire, $couleur);



  // dessiner un pixel aux coordonnées (x,y).
  ImageSetPixel ($image, 200, 200, $noir);

  // sert à dessiner une ligne entre deux points de coordonnées (x1,y1)  et (x2,y2).
  ImageLine ($image, 5, 50, 395, 50,  $bleu);
  ImageLine ($image, 360, 5, 360, 445,  $bleu);

  //dessine une ellipse ou un circle dont le centre est aux coordonnées x,y et les rayons r1 et r2 (x, y , r1 , r2 )
  ImageEllipse ($image, 180, 240, 180, 280, $noir);

  // dessine un rectangle, dont le coin en haut à gauche est de coordonnées $(x_1, y_1)$ et celui en bas à droite $(x_2, y_2)$.
  ImageRectangle ($image, 100, 185, 260, 300, $bleu);


  // dessine un polygone ayant un nombre de points égal à $nombre_de_points(s'il y a trois points, c'est donc un triangle). L'array$array_pointscontient les coordonnées de tous les points du polygone dans l'ordre : $x_1$, $y_1$, $x_2$, $y_2$, $x_3$, $y_3$, $x_4$, $y_4$…
  $points = array(180, 185, 102, 240, 180, 300, 258, 240);
  ImagePolygon ($image, $points, 4, $noir);

  //Rend une image transparente (Uniquement utilisable avec des .png)
  //imagecolortransparent($image, $orange); /* l'orange de l'image de fond dvient transparent */

  	imagepng($image);
 ?>