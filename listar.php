<?php
include "conexion.php";

$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($conexion, $sql);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Nombre</th><th>Email</th></tr>";
while($fila = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td>".$fila['id']."</td>";
    echo "<td>".$fila['nombre']."</td>";
    echo "<td>".$fila['email']."</td>";
    echo "</tr>";
}
echo "</table>";
?>

