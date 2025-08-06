<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$baseDeDatos = "clientes";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $baseDeDatos);

if (!$conexion) {
    die("Falló la conexión a la base de datos: " . mysqli_connect_error());
}
?>
