<?php 



if($_POST){

    date_default_timezone_set("America/Argentina/Buenos_Aires"); 
	$nombre_apellido = $_POST['nom_ape'];
	$correo = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	$fecha_actual= date("d-m-Y, g:i a");

	$texto="<div>
            <h4>Nombre y Apellido: </h4><p>".$nombre_apellido."</p>
            <h4>E-mail: </h4>".$correo."
            <h4>Comentario: </h4><p>".$mensaje."</p>
            <h4>Fecha: </h4><p>".$fecha_actual."</p>
            </div>";

	$archivo=fopen('comentarios.txt','a') or die('Can\'t create file');
	fputs($archivo, $texto);
	echo "<h3>Envio con exito!</h3>";
	fclose($archivo);

} ?>