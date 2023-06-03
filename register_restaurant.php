<?php
include_once('db.php');

//recibe todos los datos del formulario
$nombre_res = mysqli_real_escape_string($conexion, $_POST['nombre_res']);
$nit_res = mysqli_real_escape_string($conexion, $_POST['nit_res']);
$direccion_res = mysqli_real_escape_string($conexion, $_POST['direccion_res']);
$telefono_res = mysqli_real_escape_string($conexion, $_POST['telefono_res']);
$logo_res = mysqli_real_escape_string($conexion, $_POST['logo_res']);
$email_res = mysqli_real_escape_string($conexion, $_POST['email_res']);

//Construye la consulta SQL con las variables escapadas
$sql = "INSERT INTO restaurantes(nombre_res, nit_res, direccion_res, telefono_res, logo_res, email_res) 
VALUES ('$nombre_res', '$nit_res', '$direccion_res', '$telefono_res', '$logo_res', '$email_res')";

//Ejecuta la consulta SQL y verifica si hubo errores
$resultado = mysqli_query($conexion, $sql);
if (!$resultado) {
    trigger_error("Query Failed! SQL- Error: ".mysqli_error($conexion), E_USER_ERROR);
}

//redirecciona a la página de nuevo restaurante
header("location:new_restaurant.php");

?>
