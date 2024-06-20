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
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-primary text-white text-center">
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
                <label for="puesto">Puesto</label>
                <input type="text" class="form-control" id="puesto" placeholder="Ingrese su puesto">
                <div class="error" id="puestoError"></div>
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su teléfono">
                <div class="error" id="telefonoError"></div>
              </div>
              <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo electrónico">
                <div class="error" id="correoError"></div>
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" class="form-control" id="contrasena" placeholder="Ingrese su contraseña">
                <div class="error" id="contrasenaError"></div>
              </div>
              <div class="form-group">
                <label for="urlWeb">URL de su web</label>
                <input type="url" class="form-control" id="urlWeb" placeholder="Ingrese la URL de su web">
                <div class="error" id="urlWebError"></div>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Registrar</button>
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

      // Validate Puesto
      var puesto = document.getElementById('puesto').value;
      if (puesto === '') {
        valid = false;
        document.getElementById('puestoError').textContent = 'El campo Puesto es obligatorio.';
      }

      // Validate Teléfono
      var telefono = document.getElementById('telefono').value;
      if (telefono === '') {
        valid = false;
        document.getElementById('telefonoError').textContent = 'El campo Teléfono es obligatorio.';
      } else if (!/^\d{10}$/.test(telefono)) {
        valid = false;
        document.getElementById('telefonoError').textContent = 'El Teléfono debe tener 10 dígitos.';
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

      // Validate URL de su web
      var urlWeb = document.getElementById('urlWeb').value;
      if (urlWeb === '') {
        valid = false;
        document.getElementById('urlWebError').textContent = 'El campo URL de su web es obligatorio.';
      } else if (!/^https?:\/\/[^\s$.?#].[^\s]*$/.test(urlWeb)) {
        valid = false;
        document.getElementById('urlWebError').textContent = 'El formato de la URL no es válido.';
      }

    //   if (valid) {
    //     alert('Formulario enviado con éxito.');
    //     // Aquí puedes agregar la lógica para enviar el formulario
    //     // form.submit();
    //   } else {
    //     alert('Por favor, complete todos los campos correctamente.');
    //   }
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
