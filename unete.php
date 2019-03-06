<!DOCTYPE html>
<html>
<head>
  <title>BMW Club Motorrad Metepec | Únete</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/bmwlogo.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/estilosOmi.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/smoke.css">
  <link rel="stylesheet" type="text/css" href="css/Slider.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/smoke.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="#">
      <img src="img/logoBMWMotorrad.jpg" alt="logo" style="width:100px;"> BMW Club Motorrad Metepec
    </a>  
    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nosotros.php">Quienes Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rutas.php">Rutas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galeria.php">Galeria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="unete.php">Únete</a>
      </li>
    </ul>
  </nav>
  <div class="container-fluid" style="margin-top:80px">
    <div class="container">
    <center><h3 class="h3">Integrate, mandanos tus datos</h3></center>
      <form method="post" action="formulario2.php" data-smk-icon="glyphicon-remove-sign">
        <div class="form-group">
          <label class="label">Nombre:</label>
          <input type="text" name="nombre" size="50" maxlength="10" minlength="2" placeholder="Captura nombre"
            class="form-control" required>
        </div>
        <div class="form-group">
          <label class="label">Apellido Paterno:</label>
          <input type="text" name="ap" placeholder="Password"
          class="form-control" required>
        </div>

        <div class="form-group">
          <label class="label">Apellido Materno:</label>
          <input name="text" name="am" class="form-control" required></input>
        </div>

        <div class="form-group">
          <label class="label">Edad:</label>
          <input type="number" name="edad" placeholder="Edad"
          class="form-control" required>
        </div>

        <div class="form-group">
          <label class="label">Género:
          <br />
          <input type="radio" checked="checked" name="genero" value="H" >Hombre 
          <input type="radio" name="genero" value="M" >
          Mujer</label>
        </div>
        <div class="form-group">
          <label class="label">Cuentanos tu experencia en motos:</label>
          <textarea name="text" name="experiencia" class="form-control" required></textarea>
        </div>
          <br/>
        <div class="text-center">
          <button type="button" class="btn btn-success" id="btnClear center">Borrar</button>
          <button type="submit" class="btn btn-primary" id="btnSubmit">Enviar Datos</button>
        </div>
      </form>
    </div>
  </div>


</body>
</html>