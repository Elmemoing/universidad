<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Inicio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Static navbar -->
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
        <li><a href="index.php" class="smoothscroll">Formulario</a></li>  
          <li class="active"><a href="materia.php">Materia</a></li>
          <li><a href="listado.php" class="smoothscroll">Listado</a></li>     
          <li><a href="generar.php" class="smoothscroll">Generar PDF</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div id="contactwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1>REGISTRO DE MATERIAS</h1>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>

  <div id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="centered">REGISTRO DE MATERIA</h2>

          <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
          <div class="form-group">
              <input type="text" name="subject" class="form-control" id="contact-subject" placeholder="Nombre de Materia" data-rule="minlen:4" data-msg="Ingrese su numero de cedula">
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <input type="name" name="name" class="form-control" id="contact-name" placeholder="Horas Catedras" data-rule="minlen:4" data-msg="Por favor, complete los datos" >
              <div class="validate"></div>
            </div>
            <select class="form-control" aria-label="Default select example">
              <option selected>Seleccione un Profesor</option>
              <option value="1">opcion 1</option>
              <option value="2">opcion 2</option>
              <option value="3">opcion 3</option>
              <option value="4">opcion 4</option>
            </select>
            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message">Formulario completado</div>
            <br>
            <div class="form-send">
              <button type="submit" class="btn btn-large">Enviar</button>
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>



  <div id="copyrights">
    <div class="container">
      <div class="credits">

        TODOS LOS DERECHOS RESERVADOS <a href="https://templatemag.com/">PROGRAMACION II</a>
      </div>
    </div>
  </div>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>

  <script src="js/main.js"></script>

</body>
</html>