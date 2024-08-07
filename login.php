<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="controllers/login.php" method="post">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="clave">Contraseña:</label>
        <input type="password" id="clave" name="clave" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>