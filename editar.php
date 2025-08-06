<?php
include("db.php");
$id = $_GET["id"];
$producto = $conexion->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $descripcion = $_POST["descripcion"];
  $precio = $_POST["precio"];
  $stock = $_POST["stock"];
  $marca = $_POST["marca"];
  $modelo = $_POST["modelo"];
  $conexion->query("UPDATE productos SET nombre='$nombre', descripcion='$descripcion', precio='$precio', stock='$stock', marca='$marca', modelo='$modelo' WHERE id=$id");
  header("Location: inicio.php");
}
include("header.php");
?>

<h2>Editar Producto</h2>
<form method="post">
  <label>Nombre:</label><br>
  <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required><br>
  <label>Descripción:</label><br>
  <textarea name="descripcion"><?= $producto['descripcion'] ?></textarea><br>
  <label>Precio:</label><br>
  <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>" required><br>
  <label>Stock:</label><br>
  <input type="number" name="stock" value="<?= $producto['stock'] ?>" required><br>
  <label>Marca:</label><br>
  <input type="text" name="marca" value="<?= $producto['marca'] ?>"><br>
  <label>Modelo:</label><br>
  <input type="text" name="modelo" value="<?= $producto['modelo'] ?>"><br><br>
  <input type="submit" value="Actualizar">
</form>

<?php include("footer.php"); ?>
