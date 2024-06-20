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
    .fondo{
      background-color: #A61B0F;
    }
    .boton:hover{
      background-color: #730606;
    }
    .boton{
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
            <h4>Registro de Empleado</h4>
          </div>
          <div class="card-body">
            <form id="registroForm">
              <div class="form-group">
                <label for="rol">Rol</label>
                <input type="text" class="form-control" id="rol" placeholder="Ingrese su rol">
                <div class="error" id="rolError"></div>
              </div>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                <div class="error" id="nombreError"></div>
              </div>
              <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" placeholder="Ingrese sus apellidos">
                <div class="error" id="apellidosError"></div>
              </div>
              <div class="form-group">
                <label for="numeroEmpleado">Número de Empleado</label>
                <input type="text" class="form-control" id="numeroEmpleado" placeholder="Ingrese su número de empleado">
                <div class="error" id="numeroEmpleadoError"></div>
              </div>
              <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico">
                <div class="error" id="correoError"></div>
              </div>
              <div class="form-group mb-5">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña">
                <div class="error" id="contrasenaError"></div>
              </div>
              <button type="submit" class="fondo boton text-light btn-danger btn-block">Registrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('registroForm').addEventListener('submit', function(event) {
      event.preventDefault();
      var valid = true;

      // Clear previous errors
      document.querySelectorAll('.error').forEach(function(el) {
        el.textContent = '';
      });

      // Validate Rol
      var rol = document.getElementById('rol').value;
      if (rol === '') {
        valid = false;
        document.getElementById('rolError').textContent = 'El campo Rol es obligatorio.';
      }

      // Validate Nombre
      var nombre = document.getElementById('nombre').value;
      if (nombre === '') {
        valid = false;
        document.getElementById('nombreError').textContent = 'El campo Nombre es obligatorio.';
      }

      // Validate Apellidos
      var apellidos = document.getElementById('apellidos').value;
      if (apellidos === '') {
        valid = false;
        document.getElementById('apellidosError').textContent = 'El campo Apellidos es obligatorio.';
      }

      // Validate Número de Empleado
      var numeroEmpleado = document.getElementById('numeroEmpleado').value;
      if (numeroEmpleado === '') {
        valid = false;
        document.getElementById('numeroEmpleadoError').textContent = 'El campo Número de Empleado es obligatorio.';
      } else if (!/^\d+$/.test(numeroEmpleado)) {
        valid = false;
        document.getElementById('numeroEmpleadoError').textContent = 'El Número de Empleado debe ser numérico.';
      }

      // Validate Correo
      var correo = document.getElementById('correo').value;
      if (correo === '') {
        valid = false;
        document.getElementById('correoError').textContent = 'El campo Correo es obligatorio.';
      } else if (!/\S+@\S+\.\S+/.test(correo)) {
        valid = false;
        document.getElementById('correoError').textContent = 'El formato del Correo no es válido.';
      }

      // Validate Contraseña
      var contrasena = document.getElementById('contrasena').value;
      if (contrasena === '') {
        valid = false;
        document.getElementById('contrasenaError').textContent = 'El campo Contraseña es obligatorio.';
      } else if (contrasena.length < 6) {
        valid = false;
        document.getElementById('contrasenaError').textContent = 'La Contraseña debe tener al menos 6 caracteres.';
      }

      // if (valid) {
      //   alert('Formulario enviado con éxito.');
      //   // Aquí puedes agregar la lógica para enviar el formulario
      //   // form.submit();
      // } else {
      //   alert('Por favor, complete todos los campos correctamente.');
      // }
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
