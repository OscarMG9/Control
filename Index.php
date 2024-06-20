<?php
session_start(); // Iniciar sesión (si no está iniciada)

// Verificar si se enviaron los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "control";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Validar y obtener los datos del formulario
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Consulta SQL para verificar las credenciales del usuario en la tabla Administrador
    $sql_admin = "SELECT * FROM Administrador WHERE correo = '$email' AND contrasena = '$password'";
    $result_admin = $conn->query($sql_admin);

    // Consulta SQL para verificar las credenciales del usuario en la tabla AsesorInterno
    $sql_asesor_interno = "SELECT * FROM AsesorInterno WHERE email = '$email' AND contrasena = '$password'";
    $result_asesor_interno = $conn->query($sql_asesor_interno);

    // Consulta SQL para verificar las credenciales del usuario en la tabla AsesorExterno
    $sql_asesor_externo = "SELECT * FROM AsesorExterno WHERE email = '$email' AND contrasena = '$password'";
    $result_asesor_externo = $conn->query($sql_asesor_externo);

    // Consulta SQL para verificar las credenciales del usuario en la tabla Asistente
    $sql_asistente = "SELECT * FROM Asistente WHERE correo = '$email' AND contrasena = '$password'";
    $result_asistente = $conn->query($sql_asistente);

    // Verificar si se encontraron resultados y redirigir según el rol
    if ($result_admin->num_rows > 0) {
        // Inicio de sesión exitoso para administrador
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header('Location: dashboard/design/index_admin.php');
        exit;
    } elseif ($result_asesor_interno->num_rows > 0) {
        // Inicio de sesión exitoso para asesor interno
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header('Location: asesor_interno.php');
        exit;
    } elseif ($result_asesor_externo->num_rows > 0) {
        // Inicio de sesión exitoso para asesor externo
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header('Location: asesor_externo.php');
        exit;
    } elseif ($result_asistente->num_rows > 0) {
        // Inicio de sesión exitoso para asistente
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header('Location: asistente.php');
        exit;
    } else {
        // Inicio de sesión fallido
        $login_error = "Correo o contraseña incorrectos.";
    }

    // Cerrar conexión
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceso</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/plugins/recursos_login/assets/css/login.css">
</head>
<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="./assets/plugins/recursos_login/assets/images/logoupt.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="./assets/plugins/recursos_login/assets/images/icono.png" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">Inicia sesión en su cuenta</p>
                            <form action="index.php" method="post">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Correo</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="form-control"
                                        placeholder="Correo electrónico"
                                        required
                                    />
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Contraseña</label>
                                    <input
                                        type="password"
                                        name="password"
                                        id="password"
                                        class="form-control"
                                        placeholder="***********"
                                        required
                                    />
                                </div>
                                <input
                                    name="login"
                                    id="login"
                                    class="btn btn-block login-btn mb-4"
                                    type="submit"
                                    value="Acceder"
                                />
                            </form>
                            <?php if (isset($login_error)): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $login_error; ?>
                                </div>
                            <?php endif; ?>
                            <a href="./assets/plugins/recursos_login/contrasena.php" class="forgot-password-link">
                                ¿Has olvidado tu contraseña?
                            </a>
                            <p class="login-card-footer-text">
                                ¿No tienes cuenta? - Comunícate con el administrador
                            </p>
                            <nav class="login-card-footer-nav">
                                <a href="#!">&copy; 2024 / Los tifones de Tucana</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
