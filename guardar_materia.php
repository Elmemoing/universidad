<?php

include 'db.php';

$nombre = $_POST['materia'];
$horas_catedras = $_POST['horas_catedras'];
$id_docente = $_POST['id_docente'];

$conexiondb = conectardb();

if ($editar == "si") {
    $query = "UPDATE docente SET materia='" . $nombre . "', horas_catedras='" . $horas_catedras . "' WHERE id='" . $id_docente . "'";
} else {
    $query = "INSERT INTO docente (nombre, horas_catedras, id_docente) VALUES 
        ('$nombre', '$horas_catedras', $id_docente)";
}

$respuesta = mysqli_query($conexiondb, $query);

if ($respuesta) {
    if ($editar == "si") {
        echo ("Se Actualizo la persona");
    } else {
        echo ("Se Registro la persona");
    }
} else {
    if ($editar == "si") {
        echo ("No se pudo actualizar la persona");
    } else {
        echo ("No se pudo registrar la persona");
    }
}

mysqli_close($conexiondb);