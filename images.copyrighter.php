<?php
header ("Content-type: image/jpeg"); // L'image que l'on va créer est un jpeg

// exemple de URL http://localhost/exos/images.copyrighter.php?image=faro.jpg&transp=20&x=0&y=0.1

// On charge d'abord les images
$source = imagecreatefrompng("mini.bandierasarda.png"); // Le logo est la source
$destination = imagecreatefromjpeg($_GET['image']); // La photo est la destination

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);

$largeur_destination = imagesx($destination);
$hauteur_destination = imagesy($destination);


// x et y permettent de faire bouger la logo dans l'image de destination. 

if (isset($_GET['x']))
{
	$x=$_GET['x'];
}
else
{
	$x=1;
}

if (isset($_GET['y']))
{
	$y=$_GET['y'];
}
else
{
	$y=1;
}


// On veut placer le logo en bas à droite, on calcule les coordonnées où on doit placer le logo sur la photo
$destination_x = (int) ($largeur_destination - $largeur_source) * $x;
$destination_y = (int) ($hauteur_destination - $hauteur_source) * $y;

// 0, 0, $largeur_source, $hauteur_source ces éléménts donnent la taille du logo, ici on prend l'image complète
// Le dernier paramètre $_GET['transp'] donne la transparence du logo sur l'image de destination (valeurs de 0 à 100 ).
// On met le logo (source) dans l'image de destination (la photo)
imagecopymerge($destination, $source, $destination_x, $destination_y, 0, 0, $largeur_source, $hauteur_source, $_GET['transp']);


// On affiche l'image de destination qui a été fusionnée avec le logo
imagejpeg($destination);
?>