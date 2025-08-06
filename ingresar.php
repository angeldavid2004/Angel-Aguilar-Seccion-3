<?php
//Incluiremos el archivo externo
include_once 'Conexion.php';
//vamos a capturar los datos del formulario
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$contrasena=$_POST['contrasena'];

//crearemos la consulta sql insert
$sql= "INSERT INTO usuarios(USUARIO,PASS,CORRE0)VALUES('$nombre','$email', '$contrasena')"; 

if (mysqli_query($Conexion,$sql)){
	echo "El usuario se guardo y todo cheque";

}else{
	echo "El usuario no se guardo mi doc".mysqli_error($Conexion);
}
mysqli_close($Conexion);
?>