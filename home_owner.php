<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Propietario</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <style>
        h2 {
            color: black;
        }
    </style>
</head>
<body>
<h1>BIENVENIDO PROPIETARIO</h1>
<h2>Platos</h2>
<?php
  $conexion = mysqli_connect("localhost", "root", "", "login");
  if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
  }

  $sql = "SELECT nombre_pla, precio_pla, descripcion_pla, categoria_pla FROM platos";
  $resultado = mysqli_query($conexion, $sql);

  if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
  }
  ?>
  <table class="table table-striped">
    <tr>
      <th>Nombre</th>
      <th>Precio</th>
      <th>Descripción</th>
      <th>Categoría</th>
    </tr>
    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $fila['nombre_pla']; ?></td>
        <td><?php echo $fila['precio_pla']; ?></td>
        <td><?php echo $fila['descripcion_pla']; ?></td>
        <td><?php echo $fila['categoria_pla']; ?></td>
      </tr>
    <?php } ?>
  </table>

  <h2>Modificar Platos</h2>
  <form action="modificar_plato.php" method="post">
    <table class="table table-striped">
      <tr>
        <td>ID del plato a modificar:</td>
        <td><input type="text" name="id_plato" placeholder="ID del plato a modificar"></td>
      </tr>
      <tr>
        <td>Nuevo Precio:</td>
        <td><input type="text" name="nuevo_precio" placeholder="Nuevo Precio"></td>
      </tr>
      <tr>
        <td>Nueva Descripción:</td>
        <td><input type="text" name="nueva_descripcion" placeholder="Nueva Descripción"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Modificar"></td>
      </tr>
    </table>
  </form>

  <a href="http://localhost/login/new_plate.php" class="btn btn-primary">Crear Plato</a>
  <br>

  <h2>Empleados</h2>
  <?php
  $sql = "SELECT usuario, correo, contraseña FROM usuarios";
  $resultado = mysqli_query($conexion, $sql);

  if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
  }
  ?>
  <table class="table table-striped">
    <tr>
      <th>Nombre</th>
      <th>Email</th>
      <th>Clave</th>
    </tr>
    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $fila['usuario']; ?></td>
        <td><?php echo $fila['correo']; ?></td>
        <td><?php echo $fila['contraseña']; ?></td>
      </tr>
    <?php } ?>
  </table>
<br>
<a href="http://localhost/login/new_clerk.php" class="btn btn-primary">Crear Empleado</a><br>
<br>
  <a href="index.php" class="btn btn-primary">Volver</a>  

<?php
  mysqli_close($conexion);
?>
</body>
</html>