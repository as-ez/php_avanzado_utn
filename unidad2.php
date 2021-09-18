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
		<h2>Eventos</h2>
	</section>
	<section>
		<form method="POST" action="unidad2.php">
			<input type="number" name="dia" required placeholder="Dia" max="31" min=1>
			<input type="number" name="mes" required placeholder="Mes" max=12 min=1>
			<input type="number" name="anio" required placeholder="Año" min=2021>
			<input type="submit" value="Calcular">
		</form>
	</section>
	<aside>
		<h4>RESULTADO</h4>
		<?php
    		include ("calculo_fecha.php");
		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>