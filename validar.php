<?php
session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$conexion = mysqli_connect("localhost", "root", "", "login");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
    die("Error de consulta: " . mysqli_error($conexion));
}

$filas = mysqli_fetch_array($resultado);

if ($filas) {
    $id_cargo = $filas['id_rol'];

    if ($id_cargo == 1) { // Administrador
        $_SESSION['usuario'] = $usuario;
        header("Location: home.php"); // Redirige a la página del administrador
        exit();
    } elseif ($id_cargo == 2) { // Cliente
        $_SESSION['usuario'] = $usuario;
        header("Location: home_customer.php"); // Redirige a la página del cliente
        exit();
    } elseif ($id_cargo == 3) { // Empleado
        $_SESSION['usuario'] = $usuario;
        header("Location: home_clerk.php"); // Redirige a la página del empleado
        exit();
    } elseif ($id_cargo == 4) { // Propietario
        $_SESSION['usuario'] = $usuario;
        header("Location: home_owner.php"); // Redirige a la página del propietario
        exit();
    } else {
        session_destroy(); // Destruye la sesión en caso de no ser un rol válido
    }
}
?>

<?php include("index.php"); ?>
<h1 class="bad">DATOS INVÁLIDOS</h1>

<?php
mysqli_free_result($resultado);
mysqli_close($conexion);
?>
