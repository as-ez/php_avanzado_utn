<?php
session_start();
header("Content-type: image/jpeg");
$imagen = imagecreate(100, 40);
$color_fondo = imagecolorallocate($imagen, 255, 204, 153);
$color_texto =  imagecolorallocate($imagen, 0, 0, 153);
$color_linea = imagecolorallocate($imagen, 136, 204, 0);
imageline($imagen, 0, 00, 80, 40, $color_linea);
imagestring($imagen, 5, 20, 20, $_SESSION['captcha'], $color_texto);
imagejpeg($imagen);
?> 