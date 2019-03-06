<!DOCTYPE html>
<html>
<head>
	<title>BMW Club Motorrad Metepec</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/bmw.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/estilosOmi.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/smoke.css">
	<link rel="stylesheet" type="text/css" href="css/Slider.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/smoke.js"></script>
	<script type="text/javascript" src="lang/es.js"></script>
</head>
<body class="body">
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">
    <img src="img/bmwlogo.png" alt="logo" style="width:40px;"> BMW Club Motorrad Metepec
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Quienes Somos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Rutas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Galeria</a>
    </li>
    <li class="nav-item">
    	<a class="nav-link" href="#">Únete</a>
    </li>
  </ul>
</nav>

	<div class="container">
	  <h2 class="h2">Slideshow Indicators</h2>
	  <p>An example of using buttons to indicate how many slides there are in the slideshow, and which slide the user is currently viewing.</p>
	 <div class="w3-content w3-display-container" style="max-width:1000px">
	  <img class="mySlides" src="img/Slider/01.jpg" style="width:100%">
	  <img class="mySlides" src="img/Slider/02.jpg" style="width:100%">
	  <img class="mySlides" src="img/Slider/03.jpg" style="width:100%">
	  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
	    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
	    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
	    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
	    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
	    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
	  </div>
	</div>
	<div class="container">
		<h1 class="h1">Formulario con validación smoke</h1>
			<form method="post" action="formulario2.php" data-smk-icon="glyphicon-remove-sign">
  				<div class="form-group">
					<label class="label">Nombre:</label>
					<input type="text" name="nombre" size="50" maxlength="10" minlength="2" placeholder="Captura nombre"
					class="form-control" required>
				</div>

				<div class="form-group">
					<label class="label">Password:</label>
					<input type="password" name="pass" placeholder="Password"
					class="form-control" required>
				</div>

				<div class="form-group">
					<label class="label">Biografía:</label>
					<textarea name="bio" class="form-control" required></textarea>
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
					<label class="label">Pasatiempos:
					<br />
					<input type="checkbox" name="op1" value="Ver Tele" class="input">Correr<br />
					<input type="checkbox" name="op2" value="Leer" >Leer <br />
					<input type="checkbox" name="op3" value="Jugar" >Jugar <br />
					<input type="checkbox" checked="checked" name="op4" value="Estudy" >Estudiar <br /></label>
				</div>

				<div class="form-group">
					<label class="label">Carrera:</label>
					<select name="carrera" class="form-control" required>
						<option value="TICS-VAL" >TICS</option>
						<option value="ISC-VAL" >ISC</option>
						<option value="QUIM-VAL" >Química</option>
						<option value="IDUS-VAL" >Industrial</option>
					</select>
				</div>

				<button type="button" class="btn btn-success" id="btnClear">Borrar</button>
  				<button type="submit" class="btn btn-primary" id="btnSubmit">Enviar Datos</button>
			</form>
	</div>
	<br/>
	<div class="container">
		<table>
		  <tr>
		    <th>First Name</th>
		    <th>Last Name</th>
		    <th>Points</th>
		  </tr>
		  <tr>
		    <td>Peter</td>
		    <td>Griffin</td>
		    <td>$100</td>
		  </tr>
		  <tr>
		    <td>Lois</td>
		    <td>Griffin</td>
		    <td>$150</td>
		  </tr>
		  <tr>
		    <td>Joe</td>
		    <td>Swanson</td>
		    <td>$300</td>
		  </tr>
		  <tr>
		    <td>Cleveland</td>
		    <td>Brown</td>
		    <td>$250</td>
		  </tr>
		</table>
	</div>

</body>
<script type="text/javascript" src="js/valbut.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
</html>