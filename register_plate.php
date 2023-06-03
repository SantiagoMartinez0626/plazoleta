<?php
include_once('db.php');

//recibe todos los datos del formulario
$nombre_pla = mysqli_real_escape_string($conexion, $_POST['nombre_pla']);
$precio_pla = mysqli_real_escape_string($conexion, $_POST['precio_pla']);
$descripcion_pla = mysqli_real_escape_string($conexion, $_POST['descripcion_pla']);
$categoria_pla = mysqli_real_escape_string($conexion, $_POST['categoria_pla']);

// Manejo de la imagen
$imagen_pla = '';
if (isset($_FILES['imagen_pla']) && $_FILES['imagen_pla']['error'] == UPLOAD_ERR_OK) {
    $file_name = $_FILES['imagen_pla']['name'];
    $file_size = $_FILES['imagen_pla']['size'];
    $file_tmp = $_FILES['imagen_pla']['tmp_name'];
    $file_type = $_FILES['imagen_pla']['type'];
    $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    $allowed_exts = array('jpg');
    if (in_array($file_ext, $allowed_exts) && $file_size < 1000000) {
        $imagen_pla = "imagenes/" . uniqid() . ".$file_ext";
        move_uploaded_file($file_tmp, $imagen_pla);
    }
}

//Valida que el precio sea un número mayor a cero
if (!is_numeric($precio_pla) || $precio_pla <= 0) {
    die("El precio del plato debe ser un número mayor a cero.");
}

//Construye la consulta SQL con las variables escapadas
$sql = "INSERT INTO platos(nombre_pla, precio_pla, descripcion_pla, imagen_pla, categoria_pla) 
VALUES ('$nombre_pla', '$precio_pla', '$descripcion_pla', '$imagen_pla', '$categoria_pla')";

//Ejecuta la consulta SQL y verifica si hubo errores
$resultado = mysqli_query($conexion, $sql);
if (!$resultado) {
    trigger_error("Query Failed! SQL- Error: ".mysqli_error($conexion), E_USER_ERROR);
}

//redirecciona a la página de nuevo restaurante
header("location:new_plate.php");

?>