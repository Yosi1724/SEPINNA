<?php
	session_start();
	include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DERECHOS</title>
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
				<span class="sr-only">Navegacion de derechos</span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Secretaría Ejecutiva del Sistema Estatal de Protección Integral de Niñas, Niños y Adolecentes</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Logueado como <i class="btn btn-danger btn-xs" ><b><?php echo $_SESSION['usr_name']; ?></b></i></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
					<li><a href="index.php">Inicio</a></li>
				    <li><a href="index.php">Derechos</a></li>
				    <li><a href="index.php">Noticias</a></li>
				    <li><a href="index.php">Centros de ayuda</a></li>
				     <li><a href="index.php">Educación</a></li>
				    <li><a href="login.php">Login</a></li>
				    <li><a href="register.php">Registro</a></li>
				    <li><a href="institucion.php">Institución educativa</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</nav>

<div id="contenedor">

	<img src="Imagenes/Inicio/Niños.jpg" width="200" height="200">
	<h1 style="text-align: justify; font-size: 15px;">Derechos de los niños, niñas y adolescentes</h1>

	<h3 style="text-align: justify;font-size: 12px;"> Los Derechos Humanos de niñas, niños y adolescentes están previstos en la Constitución Política de los Estados Unidos Mexicanos, en los tratados internacionales y en las demás leyes aplicables, esencialmente en la Convención sobre los Derechos del Niño y en la Ley General de los Derechos de Niñas, Niños y Adolescentes la cual reconoce a niñas, niños y adolescentes como titulares de derechos y, en su artículo 13, de manera enunciativa y no limitativa señala los siguientes: </h3>

</div>

<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
        </filter>
    </defs>
</svg>


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>