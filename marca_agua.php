<?php
$base='img/cordillera.png'; 
$marca_agua='img/marca.png';
$imagen=imagecreatefrompng($marca_agua);
$imagen2=imagecreatefrompng($base);
imagecopy($imagen2, $imagen, 50, 50, 0, 0, imagesx($imagen), imagesy($imagen));
header("Content-type: image/png");
imagepng($imagen2);
?> 