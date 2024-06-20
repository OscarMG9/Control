<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $evaluador_nombre = $_POST['evaluador_nombre'];
    $evaluador_puesto = $_POST['evaluador_puesto'];
    $empresa_razon_social = $_POST['empresa_razon_social'];
    $empresa_web = $_POST['empresa_web'];
    $fecha = $_POST['fecha'];
    $evaluador_telefono = $_POST['evaluador_telefono'];
    $evaluador_email = $_POST['evaluador_email'];
    $proceso_evaluar = $_POST['proceso_evaluar'];

    $alumno_nombre = $_POST['alumno_nombre'];
    $alumno_matricula = $_POST['alumno_matricula'];
    $alumno_firma = $_POST['alumno_firma'];
    $alumno_proyecto = $_POST['alumno_proyecto'];
    $alumno_telefono = $_POST['alumno_telefono'];
    $alumno_email = $_POST['alumno_email'];
    $asesor_nombre_firma = $_POST['asesor_nombre_firma'];

    $competencia_1 = $_POST['competencia_1'];
    $competencia_2 = $_POST['competencia_2'];
    $competencia_3 = $_POST['competencia_3'];
    $competencia_4 = $_POST['competencia_4'];

    $campo_competencia = $_POST['campo_competencia'];
    $campo_calificacion = $_POST['campo_calificacion'];
    $area_desempeno = implode(", ", $_POST['area_desempeno']);

    // Aquí puedes guardar los datos en una base de datos o enviarlos por correo electrónico
    // Por ejemplo, aquí mostramos los datos en pantalla:

    echo "<h1>Datos Recibidos</h1>";
    echo "<h2>Datos Generales de la Empresa</h2>";
    echo "Nombre del evaluador: $evaluador_nombre<br>";
    echo "Puesto: $evaluador_puesto<br>";
    echo "Razón social de la empresa: $empresa_razon_social<br>";
    echo "Web de la empresa: $empresa_web<br>";
    echo "Fecha: $fecha<br>";
    echo "Teléfono del evaluador: $evaluador_telefono<br>";
    echo "Email del evaluador: $evaluador_email<br>";
    echo "Proceso a evaluar: $proceso_evaluar<br>";

    echo "<h2>Datos Generales del Alumno</h2>";
    echo "Nombre del alumno: $alumno_nombre<br>";
    echo "Matrícula: $alumno_matricula<br>";
    echo "Firma: $alumno_firma<br>";
    echo "Proyecto: $alumno_proyecto<br>";
    echo "Teléfono del alumno: $alumno_telefono<br>";
    echo "Email del alumno: $alumno_email<br>";
    echo "Nombre y firma del asesor interno: $asesor_nombre_firma<br>";

    echo "<h2>Evaluación del Cumplimiento del Perfil de Egreso</h2>";
    echo "Competencia 1: $competencia_1<br>";
    echo "Competencia 2: $competencia_2<br>";
    echo "Competencia 3: $competencia_3<br>";
    echo "Competencia 4: $competencia_4<br>";

    echo "<h2>Evaluación del Campo Profesional y Ocupacional</h2>";
    echo "Competencia: $campo_competencia<br>";
    echo "Calificación: $campo_calificacion<br>";
    echo "Áreas en las que se desempeñó: $area_desempeno<br>";
}
?>
