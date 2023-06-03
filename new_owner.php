<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Propietario</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <style>
        .container p {
            color: black;
        }

        .container input[type="password"] {
            width: 100%;
            padding: 5px;
            border-radius: 5px;
            color: black;
        }
    </style>
</head>
<body>
<div class="container">
    <form name="form" action="register_owner.php" method="post">
        <h1>REGISTRO DE PROPIETARIOS</h1> 
        <p>Nombre de usuario <input type="text" placeholder="ingrese el nombre" name="usuario" required></p>
        <p>Correo <input type="text" placeholder="ingrese el correo" name="correo" required></p>
        <p>Contraseña <input type="password" placeholder="ingrese la contraseña" name="contraseña" required></p>
        <input type="submit" value="Registrar Propietario">
        </form> 
    <br>
    <a href="home.php" class="button">Volver</a>
</div>
</body>
</html>
