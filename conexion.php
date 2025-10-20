<?php
class Conexion {
    public $conn;
    public function __construct(){
        // Ajusta usuario/clave/host si usas distinto (ej. en hosting)
        $this->conn = new mysqli("localhost", "root", "", "db_usuarios");
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }
}
?>
