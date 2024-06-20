<?php include("../../conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos Registrados</title>
    <!-- Incluir estilos de Bootstrap y DataTables -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <!-- Incluir jQuery y DataTables JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Incluir Font Awesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
        }
        table.dataTable {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        table.dataTable th, table.dataTable td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        table.dataTable th {
            background-color: #f2f2f2;
        }
        .actions {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .actions a {
            margin: 0 5px;
            color: #333;
        }
        .btn {
            padding: 5px 10px;
            font-size: 14px;
            border-radius: 4px;
        }
        .btn-edit {
            background-color: #007bff;
            color: #fff;
            border: none;
        }
        .btn-delete {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="my-4">Alumnos registrados</h2>
        <a href="./agregarAlumno.php" class="btn btn-success">Agregar alumno</a>
        <br>
        <br>
        <table id="alumnosTable" class="table table-striped table-bordered table-hover dataTable">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Matrícula</th>
                    <th>Grado</th>
                    <th>Grupo</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Asesor Interno</th>
                    <th>Asesor Externo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT alumnos.id_alumno, alumnos.nombre, alumnos.apellidos, alumnos.matricula, alumnos.grado, alumnos.grupo, alumnos.telefono, alumnos.correo, asesorinterno.nombre AS nombre_ai, asesorinterno.apellidos AS apellidos_ai, asesorexterno.nombre AS nombre_ae, asesorexterno.apellidos AS apellidos_ae FROM alumnos 
                              INNER JOIN asesorinterno ON alumnos.id_ai_fk = asesorinterno.id_ai 
                              INNER JOIN asesorexterno ON alumnos.id_ae_fk = asesorexterno.id_ae";

                    $result = mysqli_query($conn, $query);

                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$row['nombre']."</td>";
                            echo "<td>".$row['apellidos']."</td>";
                            echo "<td>".$row['matricula']."</td>";
                            echo "<td>".$row['grado']."</td>";
                            echo "<td>".$row['grupo']."</td>";
                            echo "<td>".$row['telefono']."</td>";
                            echo "<td>".$row['correo']."</td>";
                            echo "<td>".$row['nombre_ai']." ".$row['apellidos_ai']."</td>";
                            echo "<td>".$row['nombre_ae']." ".$row['apellidos_ae']."</td>";
                            echo "<td class='actions'>";
                            echo "<a href='../admin/accionesAI/updateAlumn.php?id=".$row['id_alumno']."' class='btn btn-sm btn-edit'><i class='fas fa-edit'></i> Editar</a>";
                            echo "<a href='../admin/accionesAI/deleteAlumn.php?id=".$row['id_alumno']."' class='btn btn-sm btn-delete' onclick='return confirm(\"¿Estás seguro de que quieres eliminar este registro?\");'><i class='fas fa-trash-alt'></i>Eliminar</a>";
                            echo "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='10'>No hay registros encontrados</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#alumnosTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.11.3/i18n/Spanish.json"
                }
            });
        });
    </script>
</body>
</html>
