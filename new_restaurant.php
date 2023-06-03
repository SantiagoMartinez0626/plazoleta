<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Restaurante</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <style>
        .container p {
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
    <form name="form" action="register_restaurant.php" method="post">
        <h1>REGISTRO DE RESTAURANTES</h1> 
        <p>Nombre <input type="text" placeholder="ingrese el nombre" name="nombre_res" required></p>
        <p>NIT <input type="text" placeholder="ingrese el NIT" name="nit_res" required></p>
        <p>Direcci&oacute;n<input type="text" placeholder="ingrese la direccion" name="direccion_res" required></p>
        <p>Tel&eacute;fono <input type="text" placeholder="ingrese el telefono" name="telefono_res" required></p>
        <p>Logo<input type="text" placeholder="ingrese el logo" name="logo_res" required></p>
        <p>Correo Propietario (ID) <input type="text" placeholder="ingrese el correo del propietario" name="email_res" required></p>
        <input type="submit" value="Registrar Restaurante">
    </form> 
    <br>
    <a href="home.php" class="button">Volver</a>
</div>
</body>
</html>
