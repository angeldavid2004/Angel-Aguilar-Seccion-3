<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];
  $stock = $_POST["stock"];
  $marca = $_POST["marca"];
  $modelo = $_POST["modelo"];
  $conexion->query("INSERT INTO productos (nombre, descripcion, precio, stock, marca, modelo)
    VALUES ('$nombre', '$descripcion', '$precio', '$stock', '$marca', '$modelo')");
  header("Location: inicio.php");
}
include("header.php");
?>

<h2>Agregar Producto</h2>
<form method="post">
  <label>Nombre:</label><br>
  <input type="text" name="nombre" required><br>
  <label>Descripción:</label><br>
  <textarea name="descripcion"></textarea><br>
  <label>Precio:</label><br>
  <input type="number" step="0.01" name="precio" required><br>
  <label>Stock:</label><br>
  <input type="number" name="stock" required><br>
  <label>Marca:</label><br>
  <input type="text" name="marca"><br>
  <label>Modelo:</label><br>
  <input type="text" name="modelo"><br><br>
  <input type="submit" value="Guardar">
</form>

<?php include("footer.php"); ?>
