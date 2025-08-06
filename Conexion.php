<?php
$servidor="localhost";
$usuario="root";
$Contrasena="";
$dbase="angel";

$Conexion=mysqli_connect($servidor,$usuario,$Contrasena,$dbase);
if(!$Conexion)
{
 +("fallo la conexion a la base de datos".mysqli_connect_error());
}

?>