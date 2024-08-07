<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
</head>
<body>
    <?php
    include_once("conexion.php");
    Connection::getConnection();
    ?>

    <h1>Bienvenido a la evidencia AA5EV1 </h1>
    <h2>Registro y login de usuarios </h2>
    <div>
        <a href="crearUsario.php">Crear Usuario</a>
    </div>
    <div>
        <a href="login.php">Login</a>
    </div>
</body>
</html>
