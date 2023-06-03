<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Plato</title>
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
    <form name="form" action="register_plate.php" method="post" enctype="multipart/form-data">
        <h1>AGREGAR PLATO</h1> 
        <p>Nombre del plato <input type="text" placeholder="Ingrese el nombre del plato" name="nombre_pla" required></p>
        <p>Precio del plato <input type="text" placeholder="Ingrese el precio" name="precio_pla" pattern="\d{1,50}" title="Solo se permiten números y un máximo de 50 caracteres" required></p>
        <p>Descripci&oacute;n <input type="text" placeholder="Ingrese breve descripcion" name="descripcion_pla" required></p>
        <p>Imagen <input type="file" name="imagen_pla" accept=".jpg" required></p>
        <p>Categoria<input type="text" placeholder="Escriba la categoria" name="categoria_pla" required></p>
        <input type="submit" value="Crear Plato">
        </form> 
    <br>
    <a href="home_owner.php" class="button">Volver</a>
</div>
</body>
</html>