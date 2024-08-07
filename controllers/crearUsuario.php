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

// Verificar si el nombre de usuario ya existe
$query = "select count(*) FROM usuarios WHERE usuario = ?";
$stmt = $conexion->prepare($query);
$stmt->execute([$usuario]);
$usuarioExiste = $stmt->fetchColumn();

if ($usuarioExiste > 0) {
    echo "El usuario ya esta en uso.";
    exit;
}

// Insertar el nuevo usuario en la base de datos
$query = "INSERT INTO usuarios (usuario, clave) VALUES (?, ?)";
$stmt = $conexion->prepare($query);
$stmt->execute([$usuario, $clave]);
echo "usuario creado exitosamente.";
//envia a exit luego de realizar el registro
header("Location: exit.php");

// Cerrar la conexión
exit;
?>
