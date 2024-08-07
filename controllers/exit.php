<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exito</title>
</head>
<body>
    <?php
    include_once("../conexion.php");
    Connection::getConnection();
    ?>
    <h1>Cuenta creada</h1>
    <a href="../login.php">Inicia sesión</a>
   
</body>
</html>
