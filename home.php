<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Administrador</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <style>
        h2 {
            color: black;
        }
    </style>
</head>
<body>
    <h1>BIENVENIDO ADMINISTRADOR</h1>

    <h2>Propietarios</h2>
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

    <a href="http://localhost/login/new_owner.php" class="button">Crear Propietario</a><br>

    <h2>Restaurantes</h2>
    <?php
    $sql = "SELECT nombre_res, logo_res FROM restaurantes";
    $resultado = mysqli_query($conexion, $sql);

    if (!$resultado) {
        die("Error en la consulta: " . mysqli_error($conexion));
    }
    ?>
    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>URL Logo</th>
        </tr>
        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
            <tr>
                <td><?php echo $fila['nombre_res']; ?></td>
                <td><?php echo $fila['logo_res']; ?></td>
            </tr>
        <?php } ?>
    </table>

    <a href="http://localhost/login/new_restaurant.php" class="button">Crear Restaurante</a><br>
    <a href="index.php" class="button">Volver</a>  

    <?php
    mysqli_close($conexion);
    ?>
</body>
</html>
