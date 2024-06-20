<?php
include("../../../conexion.php");

$nombre = $apellidos = $matricula = $grado = $grupo = $telefono = $correo = $contrasena = $AI = $AE = '';
$nombreError = $apellidosError = $matriculaError = $gradoError = $grupoError = $telefonoError = $correoError = $contrasenaError = $asesorInternoError = $asesorExternoError = '';
$alumno_id = ''; // Variable para almacenar el ID del alumno

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    // Obtener el ID del alumno de la URL
    $alumno_id = $_GET['id'];

    // Consulta SQL para obtener los datos del alumno por su ID
    $query = "SELECT * FROM alumnos WHERE id_alumno = $alumno_id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $matricula = $row['matricula'];
        $grado = $row['grado'];
        $grupo = $row['grupo'];
        $telefono = $row['telefono'];
        $correo = $row['correo'];
        $contrasena = $row['contrasena'];
        $AI = $row['id_ai_fk'];
        $AE = $row['id_ae_fk'];
    } else {
        echo "No se encontró ningún alumno con el ID proporcionado.";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar y procesar los datos del formulario
    $nombre = validar_campo($_POST["nombre"]);
    $apellidos = validar_campo($_POST["apellidos"]);
    $matricula = validar_campo($_POST["matricula"]);
    $grado = validar_campo($_POST["grado"]);
    $grupo = validar_campo($_POST["grupo"]);
    $telefono = validar_campo($_POST["telefono"]);
    $correo = validar_campo($_POST["correo"]);
    $contrasena = validar_campo($_POST["contrasena"]);
    $AI = validar_campo($_POST["id_ai"]);
    $AE = validar_campo($_POST["id_ae"]);
    $alumno_id = $_POST['id_alumno']; // ID del alumno a actualizar

    // Validación de campos (como se hizo anteriormente)

    if (empty($nombreError) && empty($apellidosError) && empty($matriculaError) && empty($gradoError) && empty($grupoError) && empty($telefonoError) && empty($correoError) && empty($contrasenaError) && empty($asesorInternoError) && empty($asesorExternoError)) {
        // Consulta SQL para actualizar los datos del alumno
        $query = "UPDATE alumnos SET 
                  nombre = '$nombre', 
                  apellidos = '$apellidos', 
                  matricula = '$matricula', 
                  grado = '$grado', 
                  grupo = '$grupo', 
                  telefono = '$telefono', 
                  correo = '$correo', 
                  contrasena = '$contrasena', 
                  id_ai_fk = '$AI', 
                  id_ae_fk = '$AE' 
                  WHERE id_alumno = $alumno_id";

        $res = mysqli_query($conn, $query);

        if ($res) {
            echo '<script>alert("Registro actualizado correctamente.");</script>';
            // Limpiar los campos después de la actualización si es necesario
            $nombre = $apellidos = $matricula = $grado = $grupo = $telefono = $correo = $contrasena = $AI = $AE = '';
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

function validar_campo($campo) {
    $campo = trim($campo);
    $campo = stripslashes($campo);
    $campo = htmlspecialchars($campo);
    return $campo;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Bootstrap</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .error {
      color: red;
      font-size: 0.875em;
    }
    .fondo {
      background-color: #A61B0F;
    }
    .boton:hover {
      background-color: #730606;
    }
    .boton {
      border-radius: 50px;
    }
  </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-body-tertiary r-5">
          <div class="card-header text-white text-center fondo">
            <h4>Actualizar Datos de Estudiante</h4>
          </div>
          <div class="card-body">
            <form id="registroForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_alumno" value="<?php echo $alumno_id; ?>"> <!-- Campo oculto con el ID del alumno a actualizar -->
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="<?php echo htmlspecialchars($nombre); ?>">
                <div class="error" id="nombreError"><?php echo $nombreError; ?></div>
              </div>
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos" value="<?php echo htmlspecialchars($apellidos); ?>">
                <div class="error" id="apellidosError"><?php echo $apellidosError; ?></div>
              </div>
              <div class="form-group">
                <label for="matricula">Matrícula</label>
                <input type="text" class="form-control" id="matricula" name="matricula" placeholder="Ingrese su matrícula" value="<?php echo htmlspecialchars($matricula); ?>">
                <div class="error" id="matriculaError"><?php echo $matriculaError; ?></div>
              </div>
              <div class="form-group">
                <label for="grado">Grado</label>
                <input type="text" class="form-control" id="grado" name="grado" placeholder="Ingrese su grado" value="<?php echo htmlspecialchars($grado); ?>">
                <div class="error" id="gradoError"><?php echo $gradoError; ?></div>
              </div>
              <div class="form-group">
                <label for="grupo">Grupo</label>
                <input type="text" class="form-control" id="grupo" name="grupo" placeholder="Ingrese su grupo" value="<?php echo htmlspecialchars($grupo); ?>">
                <div class="error" id="grupoError"><?php echo $grupoError; ?></div>
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su teléfono" value="<?php echo htmlspecialchars($telefono); ?>">
                <div class="error" id="telefonoError"><?php echo $telefonoError; ?></div>
              </div>
              <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo electrónico" value="<?php echo htmlspecialchars($correo); ?>">
                <div class="error" id="correoError"><?php echo $correoError; ?></div>
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" value="<?php echo htmlspecialchars($contrasena); ?>">
                <div class="error" id="contrasenaError"><?php echo $contrasenaError; ?></div>
              </div>
              <div class="form-group">
                <label for="asesorInterno">Asesor Interno</label>
                <select name="id_ai" id="id_ai" class="form-control">
                  <option value="">Elige una opción</option>
                  <?php
                    $query = "SELECT id_ai, nombre, apellidos FROM asesorinterno";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<option value="' . $row['id_ai'] . '"';
                      if ($row['id_ai'] == $AI) {
                        echo ' selected';
                      }
                      echo '>' . $row['nombre'] . ' ' . $row['apellidos'] . '</option>';
                    }
                  ?>
                </select>
                <div class="error" id="asesorInternoError"><?php echo $asesorInternoError; ?></div>
              </div>
              <div class="form-group">
                <label for="asesorExterno">Asesor Externo</label>
                <select name="id_ae" id="id_ae" class="form-control">
                  <option value="">Elige una opción</option>
                  <?php
                    $query = "SELECT id_ae, nombre, apellidos FROM asesorexterno";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo '<option value="' . $row['id_ae'] . '"';
                      if ($row['id_ae'] == $AE) {
                        echo ' selected';
                      }
                      echo '>' . $row['nombre'] . ' ' . $row['apellidos'] . '</option>';
                    }
                  ?>
                </select>
                <div class="error" id="asesorExternoError"><?php echo $asesorExternoError; ?></div>
              </div>
              <button type="submit" name="guardar" class="fondo boton text-light btn-danger btn-block">Actualizar</button>
              <a href="../../ViewsAI/tableAlumnos.php" class="text-center boton text-light btn-primary btn-block">Cancelar</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // JavaScript para validar el formulario antes del envío
    document.getElementById('registroForm').addEventListener('submit', function(event) {
      var valid = true;

      // Clear previous errors
      document.querySelectorAll('.error').forEach(function(el) {
        el.textContent = '';
      });

      // Validación de campos aquí igual que en PHP

      if (!valid) {
        event.preventDefault();
        alert('Por favor, completa todos los campos correctamente.');
      }
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
