<?php
$ruta = 'img/unidad4.jpg'; 
$base = imagecreatefromjpeg($ruta); 
$img_ancho = imagesx($base); 
$img_alto = imagesy($base);  
$ancho_thumb = 150; 
$alto_thumb = 150; 	
$img_thumb = imagecreate($ancho_thumb, $alto_thumb); 
imagecopyresized($img_thumb, $base, 0, 0, 0, 0, $ancho_thumb, $alto_thumb, $img_ancho, $img_alto); 
imagejpeg($img_thumb);
?>