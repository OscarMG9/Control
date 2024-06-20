<?php include("../../../conexion.php") ?>

<?php
    $id= ($_GET["id_alumno"]);
    $query = "DELETE FROM alumnos WHERE id_alumno = $id";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("FALLO CONSULTA");
    }

    header("location: ../../ViewsAI/tableAlumnos.php");
?>