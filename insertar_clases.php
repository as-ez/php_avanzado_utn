<?php
$unidad = $_POST['unidad'];
$date = $_POST['date'];

include('conexion.php');

mysqli_query($datos_base, "INSERT INTO clases VALUES (DEFAULT, '$unidad', '$date')");
?>