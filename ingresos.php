<?php
// Incluir el archivo de conexión
include_once 'cliente.php';

// Capturar los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$sexo = $_POST['sexo'];
 
// Consulta SQL corregida
$sql = "INSERT INTO clientes (Nombre, Apellido, Correo, Direccion,Telefono,Sexo)
        VALUES ('$nombre', '$apellido', '$correo','$direccion','$telefono','$sexo')";
if (mysqli_query($conexion, $sql)) {
    echo "El usuario se guardó correctamente.";
} else {
    echo "Error: No se pudo guardar el usuario. " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>