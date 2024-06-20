<?php
$servername = "localhost";   // Nombre del servidor de MySQL (por defecto, 'localhost')
$username = "root";          // Nombre de usuario de MySQL (generalmente 'root' en desarrollo)
$password = "";              // Contraseña de MySQL (deja vacío si no tienes contraseña)
$database = "control";       // Nombre de la base de datos que has creado

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";
?>
