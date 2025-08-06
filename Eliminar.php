<?php
//incluir la conexion a mi servido
include_once'Conexion.php';

$id = $_POST['id'];

$id = intval($id);//floarval para comvertir a fraccion
$sql ="DELETE FROM usuarios WHERE id=$id";
if(mysqli_query($Conexion,$sql)){
    echo'usuario eliminado';
}
else{
    echo'ups, el usuario nose pudo eliminar'. mysqli_error($Conexion);
}
mysqli_close($Conexion);
?>