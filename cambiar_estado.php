<?php
$conexion = mysqli_connect("localhost", "root", "", "login");
if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $idPlato = $_POST['id_plato'];
  $nuevoEstado = $_POST['estado'];

  // Actualizar el estado del plato en la base de datos
  $sql = "UPDATE platos SET habilitado = $nuevoEstado WHERE id_plato = $idPlato";
  $resultado = mysqli_query($conexion, $sql);

  if ($resultado) {
    echo "Estado del plato actualizado correctamente.";
  } else {
    echo "Error al actualizar el estado del plato: " . mysqli_error($conexion);
  }
}

mysqli_close($conexion);
?>
