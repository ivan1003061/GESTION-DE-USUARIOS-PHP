<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="registrar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre completo" required><br>
        <input type="email" name="email" placeholder="Correo" required><br>
        <button type="submit">Registrar</button>
    </form>

    <br>
    <a href="listar.php">Ver usuarios registrados</a>
</body>
</html>
