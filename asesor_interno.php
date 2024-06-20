<?php
session_start(); // Iniciar o reanudar sesión

// Verificar si el usuario está logueado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php'); // Redirigir a la página de inicio de sesión si no está logueado
    exit;
}

// Procesar el cierre de sesión si se ha enviado el formulario
if (isset($_POST['logout'])) {
    session_destroy(); // Destruir todas las variables de sesión
    header('Location: index.php'); // Redirigir a la página de inicio de sesión después de cerrar sesión
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>asesor_interno</title>
</head>
<body>
  <h1>Bienvenido</h1>
  <p>Has iniciado sesión correctamente como <?php echo $_SESSION['email']; ?>.</p>
  <form action="" method="post">
    <input type="submit" name="logout" value="Cerrar sesión">
  </form>
</body>
</html>
