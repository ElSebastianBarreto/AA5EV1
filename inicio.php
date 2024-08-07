<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

// Obtener los datos del usuario desde la URL
$usuario = isset($_GET['usuario']) ? $_GET['usuario'] : '';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
</head>
<body>
    <h1>Bienvenido, <?php echo htmlspecialchars($usuario); ?>!</h1>
    <p>Has iniciado sesión exitosamente.</p>
    <a href="cerrarSesion.php">Cerrar sesión</a>
</body>
</html>