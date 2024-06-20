<?php
include("../../conexion.php");

// Inicializar variables para los campos del formulario
$nombre = $apellidos = $matricula = $grado = $grupo = $telefono = $correo = $contrasena = $AI = $AE = '';
$nombreError = $apellidosError = $matriculaError = $gradoError = $grupoError = $telefonoError = $correoError = $contrasenaError = $asesorInternoError = $asesorExternoError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validación de campos
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

    // Validación de errores
    if (empty($nombre)) {
        $nombreError = "El campo Nombre es obligatorio.";
    }

    if (empty($apellidos)) {
        $apellidosError = "El campo Apellidos es obligatorio.";
    }

    if (empty($matricula)) {
        $matriculaError = "El campo Matrícula es obligatorio.";
    }

    if (empty($grado)) {
        $gradoError = "El campo Grado es obligatorio.";
    }

    if (empty($grupo)) {
        $grupoError = "El campo Grupo es obligatorio.";
    }

    if (empty($telefono)) {
        $telefonoError = "El campo Teléfono es obligatorio.";
    } elseif (!preg_match('/^\d{10}$/', $telefono)) {
        $telefonoError = "El Teléfono debe tener 10 dígitos.";
    }

    if (empty($correo)) {
        $correoError = "El campo Correo es obligatorio.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $correoError = "El formato del Correo no es válido.";
    }

    if (empty($contrasena)) {
        $contrasenaError = "El campo Contraseña es obligatorio.";
    } elseif (strlen($contrasena) < 6) {
        $contrasenaError = "La Contraseña debe tener al menos 6 caracteres.";
    }

    if (empty($AI)) {
        $asesorInternoError = "Debes seleccionar un Asesor Interno.";
    }

    if (empty($AE)) {
        $asesorExternoError = "Debes seleccionar un Asesor Externo.";
    }

    // Si no hay errores, proceder con la inserción
    if (empty($nombreError) && empty($apellidosError) && empty($matriculaError) && empty($gradoError) && empty($grupoError) && empty($telefonoError) && empty($correoError) && empty($contrasenaError) && empty($asesorInternoError) && empty($asesorExternoError)) {
        $query = "INSERT INTO alumnos (nombre, apellidos, matricula, grado, grupo, telefono, correo, contrasena, id_ai_fk, id_ae_fk) VALUES 
                  ('$nombre', '$apellidos', '$matricula', '$grado', '$grupo', '$telefono', '$correo', '$contrasena', '$AI', '$AE')";
        
        $res = mysqli_query($conn, $query);

        if ($res) {
            echo '<script>alert("Registro insertado correctamente.");</script>';
            // Limpiar los campos después de la inserción si es necesario
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
<div class="container mt-5 ">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg p-3 mb-5 bg-body-tertiary r-5">
          <div class="card-header text-white text-center fondo">
            <h4>Registro de Estudiante</h4>
          </div>
          <div class="card-body">
            <form id="registroForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
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
                              if ($AI == $row['id_ai']) {
                                  echo ' selected';
                              }
                              echo '>' . $row['nombre'] . ' ' . $row['apellidos'] . '</option>';
                          }
                      ?>
                  </select> 
                <div class="error" id="asesorInternoError"><?php echo $asesorInternoError; ?></div>
              </div>
              <div class="form-group mb-5">
                <label for="asesorExterno">Asesor Externo</label>
                <select name="id_ae" id="id_ae" class="form-control">
                      <option value="">Elige una opción</option>
                      <?php
                          $query = "SELECT id_ae, nombre, apellidos FROM asesorexterno";
                          $result = mysqli_query($conn, $query);
                          while ($row = mysqli_fetch_assoc($result)) {
                              echo '<option value="' . $row['id_ae'] . '"';
                              if ($AE == $row['id_ae']) {
                                  echo ' selected';
                              }
                              echo '>' . $row['nombre'] . ' ' . $row['apellidos'] . '</option>';
                          }
                      ?>
                  </select> 
                <div class="error" id="asesorExternoError"><?php echo $asesorExternoError; ?></div>
              </div>
              <button type="submit" name="guardar" class="fondo boton text-light btn-danger btn-block">Registrar</button>
              <a href="./tableAlumnos.php" class="text-center boton text-light btn-primary btn-block">Cancelar</a>
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

      // Validate Nombre
      var nombre = document.getElementById('nombre').value;
      if (nombre.trim() === '') {
        valid = false;
        document.getElementById('nombreError').textContent = 'El campo Nombre es obligatorio.';
      }

      // Validate Apellidos
      var apellidos = document.getElementById('apellidos').value;
      if (apellidos.trim() === '') {
        valid = false;
        document.getElementById('apellidosError').textContent = 'El campo Apellidos es obligatorio.';
      }

      // Validate Matrícula
      var matricula = document.getElementById('matricula').value;
      if (matricula.trim() === '') {
        valid = false;
        document.getElementById('matriculaError').textContent = 'El campo Matrícula es obligatorio.';
      }

      // Validate Grado
      var grado = document.getElementById('grado').value;
      if (grado.trim() === '') {
        valid = false;
        document.getElementById('gradoError').textContent = 'El campo Grado es obligatorio.';
      }

      // Validate Grupo
      var grupo = document.getElementById('grupo').value;
      if (grupo.trim() === '') {
        valid = false;
        document.getElementById('grupoError').textContent = 'El campo Grupo es obligatorio.';
      }

      // Validate Teléfono
      var telefono = document.getElementById('telefono').value;
      if (telefono.trim() === '') {
        valid = false;
        document.getElementById('telefonoError').textContent = 'El campo Teléfono es obligatorio.';
      } else if (!/^\d{10}$/.test(telefono)) {
        valid = false;
        document.getElementById('telefonoError').textContent = 'El Teléfono debe tener 10 dígitos.';
      }

      // Validate Correo
      var correo = document.getElementById('correo').value;
      if (correo.trim() === '') {
        valid = false;
        document.getElementById('correoError').textContent = 'El campo Correo es obligatorio.';
      } else if (!/\S+@\S+\.\S+/.test(correo)) {
        valid = false;
        document.getElementById('correoError').textContent = 'El formato del Correo no es válido.';
      }

      // Validate Contraseña
      var contrasena = document.getElementById('contrasena').value;
      if (contrasena.trim() === '') {
        valid = false;
        document.getElementById('contrasenaError').textContent = 'El campo Contraseña es obligatorio.';
      } else if (contrasena.length < 6) {
        valid = false;
        document.getElementById('contrasenaError').textContent = 'La Contraseña debe tener al menos 6 caracteres.';
      }

      // Validate Asesor Interno
      var asesorInterno = document.getElementById('id_ai').value;
      if (asesorInterno.trim() === '') {
        valid = false;
        document.getElementById('asesorInternoError').textContent = 'Debes seleccionar un Asesor Interno.';
      }

      // Validate Asesor Externo
      var asesorExterno = document.getElementById('id_ae').value;
      if (asesorExterno.trim() === '') {
        valid = false;
        document.getElementById('asesorExternoError').textContent = 'Debes seleccionar un Asesor Externo.';
      }

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
