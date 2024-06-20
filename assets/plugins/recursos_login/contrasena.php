<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../../PHPMailer/Exception.php';
require '../../../PHPMailer/PHPMailer.php';
require '../../../PHPMailer/SMTP.php';

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "control";

// Establecer conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Variables para mensajes de éxito y error
$envio = '';
$error = '';
$error2 = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recover-submit'])) {
    $email = $_POST['email'];

    // Consultas SQL para buscar el correo y la contraseña en las tablas respectivas
    $query_admin = "SELECT correo, contrasena FROM Administrador WHERE correo = '$email'";
    $query_interno = "SELECT email, contrasena FROM AsesorInterno WHERE email = '$email'";
    $query_externo = "SELECT email, contrasena FROM AsesorExterno WHERE email = '$email'";
    $query_asistente = "SELECT correo, contrasena FROM Asistente WHERE correo = '$email'";

    // Ejecutar consultas y verificar resultados
    $result_admin = $conn->query($query_admin);
    $result_interno = $conn->query($query_interno);
    $result_externo = $conn->query($query_externo);
    $result_asistente = $conn->query($query_asistente);

    if ($result_admin->num_rows > 0) {
        $row = $result_admin->fetch_assoc();
        $contrasena = $row['contrasena'];
        $correo = $row['correo'];
    } elseif ($result_interno->num_rows > 0) {
        $row = $result_interno->fetch_assoc();
        $contrasena = $row['contrasena'];
        $correo = $row['email'];
    } elseif ($result_externo->num_rows > 0) {
        $row = $result_externo->fetch_assoc();
        $contrasena = $row['contrasena'];
        $correo = $row['email'];
    } elseif ($result_asistente->num_rows > 0) {
        $row = $result_asistente->fetch_assoc();
        $contrasena = $row['contrasena'];
        $correo = $row['correo'];
    } else {
        // Si el correo no se encuentra en ninguna tabla
        $error2 = "Correo no encontrado.";
    }

    // Si se encontró el correo en alguna tabla, enviar correo de recuperación
    if (isset($correo) && isset($contrasena)) {
        try {
            // Configuración del correo usando PHPMailer
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'tiserviciosud4@gmail.com'; // Tu correo SMTP
            $mail->Password = 'klyf fmyr aaiq ramz'; // Tu contraseña SMTP
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Configuración del correo
            $mail->setFrom('tiserviciosud4@gmail.com', 'SERVICIOS TI - UD4');
            $mail->addAddress($correo); // Correo del destinatario
            $mail->isHTML(true);
            $mail->Subject = '=?UTF-8?B?' . base64_encode('Recuperación de Contraseña') . '?=';

            // Cuerpo del correo con la contraseña recuperada
            $mail->Body = '
                <!DOCTYPE html>
                <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Recuperación de contraseña</title>
                    <style>
                        /* Estilos CSS */
                        body {
                            font-family: Arial, sans-serif;
                        }
                    </style>
                </head>
                <body>
                    <h2>SERVICIOS TI - UD4</h2>
                    <p>Usted ha realizado una recuperación de contraseña.</p>
                    <p>Su contraseña es: <strong>' . $contrasena . '</strong></p>
                    <p>Gracias por su preferencia. (No responda a este mensaje)</p>
                    <a href="#!">&copy; 2024 / Los tifones de Tucana</a>
                </body>
                </html>
            ';

            // Enviar el correo electrónico
            $mail->send();
            $envio = "Contraseña enviada.";
        } catch (Exception $e) {
            $error = "Error al enviar el correo.";
        }
    }
}

// Cerrar conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperar contraseña</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="assets/images/logoupt.jpg" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <img src="assets/images/icono.png" alt="logo" class="logo">
                            </div>
                            <p class="login-card-description">
                                ¿Has olvidado tu contraseña?
                            </p>
                            <form id="recover-form" method="post">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Correo</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electrónico" required>
                                </div>

                                <?php if (!empty($envio)): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo $envio; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($error)): ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?php echo $error; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (!empty($error2)): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo $error2; ?>
                                    </div>
                                <?php endif; ?>

                                <input name="recover-submit" id="recover-submit" class="btn btn-block login-btn mb-4" type="submit" value="Enviar">
                            </form>
                            <form action="../../../index.php" method="post">
                                <input name="recover-submit" id="recover-submit" class="btn btn-block login-btn mb-4" type="submit" value="Iniciar sesión">
                            </form>
                            <nav class="login-card-footer-nav">
                                <a href="#!">&copy; 2024 / </a>
                                <a href="#!">Los tifones de Tucana</a>
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
