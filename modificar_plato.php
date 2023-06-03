<?php
$conexion = mysqli_connect("localhost", "root", "", "login");
if (!$conexion) {
  die("Error de conexión: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $idPlato = $_POST["id_plato"];
  $nuevoPrecio = $_POST["nuevo_precio"];
  $nuevaDescripcion = $_POST["nueva_descripcion"];

  // Preparar la consulta SQL
  $sql = "SELECT id_plato FROM platos WHERE id_plato = ?";
  $stmt = mysqli_prepare($conexion, $sql);

  // Vincular los parámetros y ejecutar la consulta
  mysqli_stmt_bind_param($stmt, "i", $idPlato);
  mysqli_stmt_execute($stmt);

  // Obtener el resultado de la consulta
  $resultado = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($resultado) > 0) {
    // Preparar la consulta de actualización
    $sqlUpdate = "UPDATE platos SET precio_pla = ?, descripcion_pla = ? WHERE id_plato = ?";
    $stmtUpdate = mysqli_prepare($conexion, $sqlUpdate);

    // Vincular los parámetros y ejecutar la consulta de actualización
    mysqli_stmt_bind_param($stmtUpdate, "ssi", $nuevoPrecio, $nuevaDescripcion, $idPlato);
    mysqli_stmt_execute($stmtUpdate);

    echo "Plato modificado correctamente.";
  } else {
    echo "ID inválido. No se encontró el plato en la base de datos.";
  }
}

mysqli_close($conexion);

?>
<br>
  <a href="home_owner.php" class="btn btn-primary">Volver</a> 
