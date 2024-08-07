<?php
include_once("../conexion.php");

//conexion con la base de datos
$conexion = Connection::getConnection();
//se obitienen los datos del registro
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

// validar entrada para que no este vacia
if (empty($usuario) || empty($clave)) {
    echo "usuario y clave son obligatorios.";
    exit;
}


// Insertar el nuevo usuario en la base de datos
$query = "INSERT INTO usuarios (usuario, clave) VALUES (?, ?)";
$stmt = $conexion->prepare($query);
$stmt->execute([$usuario, $clave]);
echo "usuario creado exitosamente.";

header("Location: exit.php");

// Cerrar la conexión
$stmt->close();
$conexion->close();
?>
