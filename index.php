<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
</head>
<body>
  <div class="container">
    <form action="validar.php" method="post">
      <h1>BIENVENIDO</h1>
      <div class="form-group">
        <p>Usuario <input type="text" placeholder="Ingrese su usuario" name="usuario"></p>
        <p>Contraseña <input type="password" placeholder="Ingrese su contraseña" name="contraseña"></p>
      </div>
      <div class="button-container">
        <input type="submit" value="Ingresar">
      </div>
    </form>
    <form action="new_customer.php">
      <div class="button-container">
        <input type="submit" value="Registrarse" class="button">
      </div>
    </form>
  </div>
</body>
</html>