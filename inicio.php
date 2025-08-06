<?php include("db.php"); include("header.php"); ?>

<h2>Inventario de Productos</h2>
<a class="btn" href="agregar.php">➕ Nuevo Producto</a>
<table>
  <tr>
    <th>ID</th><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Stock</th><th>Marca</th><th>Modelo</th><th>Acciones</th>
  </tr>
  <?php
  $datos = $conexion->query("SELECT * FROM productos");
  while ($fila = $datos->fetch_assoc()):
  ?>
    <tr>
      <td><?= $fila['id'] ?></td>
      <td><?= $fila['nombre'] ?></td>
      <td><?= $fila['descripcion'] ?></td>
      <td>Lps <?= $fila['precio'] ?></td>
      <td><?= $fila['stock'] ?></td>
      <td><?= $fila['marca'] ?></td>
      <td><?= $fila['modelo'] ?></td>
      <td>
  <div style="display: flex; flex-direction: column; gap: 5px;">
    <a class="btn" href="editar.php?id=<?= $fila['id'] ?>">✏️ Editar</a>
    <a class="btn" href="eliminar.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿Eliminar este producto?')">🗑️ Eliminar</a>
  </div>
</td>
    </tr>
  <?php endwhile; ?>
</table>

<?php include("footer.php"); ?>
