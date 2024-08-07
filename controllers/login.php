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
$query ="SELECT clave FROM usuarios WHERE usuario = ?";
$stmt = $conexion->prepare($query);
$stmt->execute([$usuario]);
$usuarioExiste = $stmt->rowCount();

if ($usuarioExiste == 0) {
    echo "El usuario no existe, crea un usuario";
    exit;
}


$storedPassword = trim($stmt->fetchColumn());
if ($clave === $storedPassword) {
    // Contraseña valida, iniciar sesion 
    session_start();
    $_SESSION['usuario'] = $usuario;

    // Redirigir a una página luego de exito en login
    header("Location: exit.php");
    exit;
} else {
    // Contraseña incorrecta
    echo "Contraseña incorrecta.";


    exit;
}
?>
