<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Cliente</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            color: black;
        }

        h2 {
            color: black;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        .table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1>BIENVENIDO</h1>
    <h2>Restaurantes</h2>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "login");
    if (!$conexion) {
        die("Error de conexión: " . mysqli_connect_error());
    }

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
    <?php
    mysqli_close($conexion);
    ?>

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
    <br>
  <a href="index.php" class="btn btn-primary">Volver</a>
    <?php
    mysqli_close($conexion);
    ?>
</body>
</html>
