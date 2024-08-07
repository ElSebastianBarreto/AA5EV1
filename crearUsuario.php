<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="controllers/crearUsuario.php" method="post">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario" >
        <br>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" >
        <br>
        <input type="submit" value="Crear Usuario">
    </form>
</body>
</html>
