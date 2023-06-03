<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <style>
        h1, h2 {
            color: black;
        }
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }
        .button {
            display: inline-block;
            background-color: #007bff;
            border: none;
            color: white;
            text-align: center;
            font-size: 16px;
            padding: 10px 24px;
            text-decoration: none;
            cursor: pointer;
        }
        .button:hover {
            background-color: #0069d9;
        }
    </style>
</head>
<body>
    <h1>BIENVENIDO AL RESTAURANTE</h1>

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

    <?php
    mysqli_close($conexion);
    ?>

    <div class="button-container">
        <a href="index.php" class="button">Volver</a>  
    </div>
</body>
</html>