<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>
		<?php 
		function contenido_captcha () {
			$cadena = "0123456789abcdefghijklmnopqrstuvwxyz#$&?";
			$codigo = '';
			for ($i=0; $i < 5; $i++) { 
				$codigo .= $cadena[rand(0,39)];
			}
			return $codigo;
		}

		$_SESSION['captcha'] = contenido_captcha();
	?>
	</section>
	<section>
	<form method="POST" action="cargar.php" >
		<input type="text" name="nombre" placeholder="Nombre" required>
		<input type="text" name="apellido" placeholder="Apellido" required>
		<input type="email" name="email" placeholder="Correo Electronico" required>
		<textarea name="consulta" placeholder="Escribe tu consulta" cols="55" rows="10" required></textarea>
		<label>Codigo de verificacion</label>
		<img src="captcha.php">
		<input type="text" name="codigo_captcha">
		<input type="submit" value ="Enviar Consulta">
	</form>
	<?php
	if(isset($_GET['error'])) { echo "<p>Codigo incorrecto!</p>";}
	if(isset($_GET['ok'])) { echo "<p>Consulta enviada correctamente!</p>";}
	?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>