<?php
	session_start();
	include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Secretaria Ejecutiva SEPINNA</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="Css/margenes.css" type="text/css" />
	<link rel="stylesheet" href="Css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/.css" type="text/css" />

    <link rel="icon" href="/Imagenes/Gobierno/Logo-Silvano.png"  type="image/png" />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Secretaría Ejecutiva del Sistema Estatal de Protección Integral de Niñas, Niños y Adolecentes</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Logeado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="index.php">Inicio</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Registro</a></li>
				<li><a href="institucion.php">Institución educativa</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div id="contenedor">
	<h4>Inicio de Sesión</h4>
	<img src="Imagenes/Inicio/Derechos.png" width="200" height="200">
	<h5 style="text-align: justify; font-size: 14px; margin-right: 16px; margin-left: 17px;">El niño debe disfrutar de todos los derechos sin importar su sexo, nacionalidad, raza, religión, idioma, en esta página aprenderas sobre los derechos de los niñas, niños y adolecentes.</h5>
	<img src="Imagenes/Inicio/Icono.jpg" width="200" height="100" style="margin-top: 70px;">
	<button class="button" style="margin-top: -13px">Página de Inicio</button>
</div>
    <img src="Imagenes/Gobierno/Logo.png" width="400" height="100" class='img'>
    <img src="Imagenes/Gobierno/Se escucha.png" width="150" height="50" style="margin-left: 350px;">
<div id="contenedor_lateral">
	<img src="Imagenes/Inicio/Niños.png" width="400" height="400">
</div>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
        </filter>
    </defs>
</svg>

	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>