<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Docente</title>
</head>

<body>
    <?php
    include 'db.php';
    $cedula = $_GET['cedula'];
    $conexiondb = conectardb();
    $query = "SELECT * FROM docente WHERE cedula=" . $cedula;
    $respuesta = mysqli_query($conexiondb, $query);
    $persona = mysqli_fetch_row($respuesta);
    mysqli_close($conexiondb);
    ?>

    <h1>Editar Persona</h1>

    <form action="guardar_persona.php" method="post">
        <table border="0">
            <tr>
                <th><b><label for="">Cedula:</label></b></th>
                <th><input type="text" name="cedula" id="" value='<?php echo $persona[0]; ?>' readonly></th>
            </tr>

            <tr>
                <th><b><label for="">Nombre:</label></b></th>
                <th><input type="text" name="nombre" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>
            <tr>
                <th><b><label for="">apellido:</label></b></th>
                <th><input type="text" name="apellido" id="" value='<?php echo $persona[1]; ?>'></th>
            </tr>

            <tr>
                <th><b><label for="">Nacimiento:</label></b></th>
                <th><input type="text" name="fecha_nacimiento" id="" value='<?php echo $persona[2]; ?>'></th>
            </tr>

            <th><b><label for="">Docente:</label></b></th>
            <th>
                <select name="id_docente" class=" form-control" id="inputGroupSelect01">
                    <?php
                    while ($docente = mysqli_fetch_assoc($resultado)) {
                        if ($docente['id'] == $persona[4]) {
                            echo "<option selected value='" . $docente['id'] . "'>" . $docente['nombre'] . "</option>";
                        } else {
                            echo "<option value='" . $docente['id'] . "'>" . $docente['nombre'] . "</option>";
                        };
                    }
                    ?>
                </select>
            </th>

        </table>
        <input type="hidden" name="editar" id="" value='si' readonly>
        <input type="submit" value="GUARDAR">
    </form>

</body>

</html>