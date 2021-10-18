<?php 

if($_POST){
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
include("clases/usuarios.php");
$usuario = new Usuarios($nombre, $apellido, $edad);
$usuario->imprime_caracteristicas();
}
?>