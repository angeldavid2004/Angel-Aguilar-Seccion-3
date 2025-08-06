<?php
//incluir la conexion a mi servido
include_once'cliente.php';
if ($_SERVER['REQUEST_METHOD']==='POST'){

$id = $_POST['id'];
$id = intval($id); // intval convierte a entero, no fracción
$sql = "DELETE FROM clientes WHERE id = $id";

if(mysqli_query($conexion, $sql)) {
   /* echo 'usuario eliminado';*/
   $mensaje="El usuario se termino con exito";
   /*aqui redirifiremos a la pagina que deseamos en este caso se  eliminat.html */
   header("location:EliminarEs.html?parametro=" . urlencode($mensaje));
   exit();
}
 else{
    echo 'ups, el usuario no se pudo eliminar: ' . mysqli_error($conexion);
}

mysqli_close($conexion);
exit();
}
?>
