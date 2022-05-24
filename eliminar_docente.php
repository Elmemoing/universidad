<?php

    require 'db.php';

    $docente = $_GET['docente'];

    $conexiondb = conectardb();

    $query = "DELETE FROM docente WHERE `docente`.`id_docente` = 10";

    $respuesta = mysqli_query($conexiondb, $query);

    if ($respuesta) {
        echo("Se borraron los datos de la persona");
        echo("<br>");
        echo("<a href='./listar_persona.php'>Listado de Personas</a>");
    } else {
        echo("Error: no se puede borrar la persona");
        echo("<br>");
        echo("<a href='./listar_persona.php'>Listado de Personas</a>");
    }
?>