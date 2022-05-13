<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de Personas</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Esta linea de abajo sirve para el icono de la página que queramos -->
  <link rel="icon" type="image/png" href="https://avatars.githubusercontent.com/u/74156373?s=96&v=4" sizes="16x16">

</head>

<body>
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.php">UNIVERSIDAD CATOLICA</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="index.php">Formulario</a></li>
          <li><a href="materia.php" class="smoothscroll">Materia</a></li>  
          <li><a href="listado.php" class="smoothscroll">Listado</a></li>
          <li><a href="generar.php" class="smoothscroll">Generar PDF</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <?php
  include 'db.php';
  $conexiondb = conectardb();
  $query = "SELECT * FROM docente";
  $resultado = mysqli_query($conexiondb, $query);
  mysqli_close($conexiondb);
  ?>

  <div class="container center">
    <div class="row">
      <div class="col-md-4 mt-3">
        <?php
        if (isset($_COOKIE['message'])) {
          echo "<div class='alert " . $_COOKIE['alert'] . " alert-dismissible fade show' role='alert'>";
          echo $_COOKIE['message'];
          echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
          echo "</div>";
          setcookie('message', '', 1);
          setcookie('alert', '', 1);
        }
        ?>
      </div>

      <div class="col-sm-6">
        <h1 class="text-center mt-5">Listado de Profesores</h1>

        <table class="table table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">N</th>
              <th scope="col">Cédula</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Fecha de Nacimiento</th>
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $index = 1;
            while ($docente = mysqli_fetch_assoc($resultado)) {
              echo "<tr>";
              echo "<th scope='row'>" . $index++ . "</th>";
              echo "<td>" . $docente['cedula'] . "</td>";
              echo "<td>" . $docente['nombre'] . "</td>";
              echo "<td>" . $docente['fecha_nacimiento'] . "</td>";
              echo "<td>" . $docente['profesion'] . "</td>";
              echo "<td>";
              echo "<a href='editar_persona.php?cedula=" . $docente['cedula'] . "' class='btn btn-outline-primary mx-1 my-1'> <i class=for='btnradio1'>Editar</i> </a>";
              echo "<a href='eliminar_persona.php?cedula=" . $cedula['cedula'] . "' class='btn btn-outline-primary mx-1 my-1'> <i class=for='btnradio1'>Borrar</i> </a>";
              echo "</td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
      <script type="text/javascript">
        const btnDelete = document.querySelectorAll('.btn-danger');
        if (btnDelete) {
          const btnArray = Array.from(btnDelete);
          btnArray.forEach((btn) => {
            btn.addEventListener('click', (e) => {
              if (!confirm('Estàs seguro de eliminarlo?')) {
                e.preventDefault();
              }
            });
          })
        }
      </script>
</body>

</html>