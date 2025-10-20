<?php
include("Usuario.php");
$u = new Usuario();
$usuarios = $u->listar();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h2>Usuarios Registrados</h2>
    <a href="index.php">Nuevo usuario</a><br><br>
    <table border="1" cellpadding="6">
        <tr><th>ID</th><th>Nombre</th><th>Email</th></tr>
        <?php foreach($usuarios as $fila){ ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['email']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
