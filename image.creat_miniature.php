<?php

$source = imagecreatefrompng("bandierasarda.png"); // La photo est la source

// Les fonctions imagesx et imagesy renvoient la largeur et la hauteur d'une image
$largeur_source = imagesx($source);
$hauteur_source = imagesy($source);


echo $largeur_source . "<br>" . $hauteur_source . "<br>";

$largeur_destination = (int) (imagesx($source) * 0.2);
$hauteur_destination = (int) (imagesy($source) * 0.2);

echo $largeur_destination . "<br>" . $hauteur_destination . "<br>";

$destination = imagecreatetruecolor($largeur_destination, $hauteur_destination); // On crée la miniature vide



$x_pos_source_sur_dest=0;
$y_pos_source_sur_dest=0;

$x_point_source=0;
$y_point_source=0;


// On crée la miniature


imagecopyresampled($destination, $source, $x_pos_source_sur_dest, $y_pos_source_sur_dest, $x_point_source, 
$y_point_source, $largeur_destination, $hauteur_destination, $largeur_source, $hauteur_source);

// On enregistre la miniature sous le nom "mini_couchersoleil.jpg"
imagepng($destination, "mini.bandierasarda.png");
?>