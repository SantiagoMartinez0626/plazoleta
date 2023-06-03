<?php
include_once('db.php');

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$db = new PDO('mysql:host=localhost;dbname=login', 'root', '');

$sql = "INSERT INTO usuarios (usuario, correo, contraseña, id_rol) VALUES (?, ?, ?, ?)";
$stmt = $db->prepare($sql);
$stmt->execute([$usuario, $correo, $contraseña, 4]);

header("location:new_owner.php");
?>