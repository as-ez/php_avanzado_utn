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
		<h2>Usuarios</h2>
	</section>
	<section>
		<form method="POST" action="unidad6.php">
			<input type="text" name="nombre" placeholder="Nombre" required>
			<input type="text" name="apellido" placeholder="Apellido" required>
			<input type="number" name="edad" placeholder="edad" min=0 max=120 required>
			<input type="submit" value ="Generar Usuario">
		</form>
	</section>
	<section><?php include("caract_usuarios.php"); ?></section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>