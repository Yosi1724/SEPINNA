<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	header("Location: index.php");
}

include_once 'dbconnect.php';

//Establece el error de validación como flag
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$nombre_representante = mysqli_real_escape_string($con, $_POST['nombre_representante']);
	$tipo_institucion = mysqli_real_escape_string($con, $_POST['tipo_institucion']);
	$nombre_institucion = mysqli_real_escape_string($con, $_POST['nombre_institucion']);
	$clave = mysqli_real_escape_string($con, $_POST['clave']);
	$municipio = mysqli_real_escape_string($con, $_POST['municipio']);
	$localidad = mysqli_real_escape_string($con, $_POST['localidad']);
	$domicilio = mysqli_real_escape_string($con, $_POST['domicilio']);
	$telefono = mysqli_real_escape_string($con, $_POST['telefono']);
	$lada = mysqli_real_escape_string($con, $_POST['lada']);
	$cp = mysqli_real_escape_string($con, $_POST['cp']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	$terminosycond = mysqli_real_escape_string($con, $_POST['terminosycond']);
	
	//Nombre sólo puede contener caracteres alfabéticos y espacio (esto varia sgun requerimiento)
	if (!preg_match("/^[a-zA-Z ]+$/",$nombre_representante)) {
		$error = true;
		$name_error = "El nombre debe contener solo caracteres del alfabeto y espacio.";
	}
	if (!preg_match("/^[a-zA-Z ]+$/",$tipo_institucion)) {
		$error = true;
		$name_error = "El tipo de institución debe contener solo caracteres del alfabeto y espacio.";
	}
	if (!preg_match("/^[a-zA-Z ]+$/",$nombre_institucion)) {
		$error = true;
		$name_error = "El nombre de la institución debe contener solo caracteres del alfabeto y espacio.";
	}
	if (!preg_match("/^[a-zA-Z ]+$/",$municipio)) {
		$error = true;
		$name_error = "El municipio debe contener solo caracteres del alfabeto y espacio.";
	}
	if (!preg_match("/^[a-zA-Z ]+$/",$localidad)) {
		$error = true;
		$name_error = "La localidad debe contener solo caracteres del alfabeto y espacio.";
	}
	if (!preg_match("/^[a-zA-Z ]+$/",$domicilio)) {
		$error = true;
		$name_error = "El domicilio debe contener solo caracteres del alfabeto y espacio.";
	}
	if (!preg_match("/^[0-9 ]+$/",$telefono)) {
		$error = true;
		$name_error = "El telefono debe contener solo caracteres numéricos y espacio.";
	}
	if (!preg_match("/^[0-9 ]+$/",$lada)) {
		$error = true;
		$name_error = "La lada debe contener solo caracteres numéricos y espacio.";
	}
	if (!preg_match("/^[0-9 ]+$/",$cp)) {
		$error = true;
		$name_error = "El código postal debe contener solo caracteres numéricos y espacio.";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Ingresa un correo electrónico válido.";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "La contraseña debe tener un mínimo de 6 caracteres.";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Las contraseñas no coinciden";
	}
	if(!$terminosycond) {
		//$error = true;
		//$terminosycond_error = "Debes aceptar Terminos y condiciones";
	}
	if (!$error) {
		if(mysqli_query($con, "INSERT INTO users(name,email,password) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "')")) {
			//$successmsg = "¡Registrado exitosamente! <a href='login.php'>Click here to Login</a>";
			$successmsg = '
			  <div class="alert alert-success alert-dismissable fade in">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    <strong>EXITO.!</strong> ¡Registrado exitosamente!
			  </div>
			  ';
		} else {
			//$errormsg = "Error de registro. Vuelve a intentarlo más tarde.";
			$errormsg = '
			<div class="alert alert-danger alert-dismissable fade in">
			    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			    <strong>Error de registro.!</strong> Verifica tus datos.
			</div>
			';
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Institución Educativa</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="Css/margenes.css" type="text/css" />
	<link rel="stylesheet" href="Css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="/Imagenes/Gobierno/Logo-Silvano.png"  type="image/png" />
	<!--link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /-->

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Secretaría Ejecutiva del Sistema Estatal de Protección Integral de Niñas, Niños y Adolecentes</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Inicio</a></li>
				<li><a href="login.php">Login</a></li>
				<li class="active"><a href="register.php">Registro</a></li>
				<li><a href="institucion.php">Institución educativa</a></li>
			</ul>
		</div>
	</div>
</nav>
<img src="Imagenes/Gobierno/Logo.png" width="400" height="100" class='img'>
<img src="Imagenes/Gobierno/Se escucha.png" width="150" height="50" style="margin-left: 85%; margin-top: -10%">
<div class="dd-wrapper" style="margin-top: -30%;">
	<div class="dd-center-content">
		<div class="">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<br>
					<legend>Registro para Instituciones Educativas</legend>

					<div class="col-3">
						<label for="name">Nombre Representante</label>
						<input type="text" name="name" placeholder="Nombre del representante" required value="<?php if($error) echo $nombre_representante; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
  
					<div class="col-3">
						<label for="name">Tipo Institución</label>
						<input type="text" name="name" placeholder="Tipo de institución" required value="<?php if($error) echo $tipo_institucion; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Nombre Institución</label>
						<input type="text" name="name" placeholder="Nombre de la institución" required value="<?php if($error) echo $nombre_institucion; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Clave</label>
						<input type="text" name="name" placeholder="Clave de la escuela" required value="<?php if($error) echo $clave; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Municipio</label>
						<input type="text" name="name" placeholder="Municipio" required value="<?php if($error) echo $municipio; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Localidad</label>
						<input type="text" name="name" placeholder="Localidad" required value="<?php if($error) echo $localidad; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Domicilio</label>
						<input type="text" name="name" placeholder="Domicilio" required value="<?php if($error) echo $domicilio; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Telefono</label>
						<input type="text" name="name" placeholder="Telefono" required value="<?php if($error) echo $telefono; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Lada</label>
						<input type="text" name="name" placeholder="Lada" required value="<?php if($error) echo $lada; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Cp</label>
						<input type="text" name="name" placeholder="Cp" required value="<?php if($error) echo $cp; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
					
					<div class="col-3">
						<label for="name">Email</label>
						<input type="email" name="email" placeholder="Correo Electrónico" required value="<?php if($error) echo $email; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>

					<div class="col-3">
						<label for="name">Contraseña</label>
						<input type="password" name="password" placeholder="Contraseña" required class="form-control" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>
					<dr>
					<div class="col-3">
						<label for="name">Confirmar Contraseña</label>
						<input type="password" name="cpassword" placeholder="Confirmar Contraseña" required class="form-control" />
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
					</div>

					<div class="dd-wrapper">
					    <label>
					      <input type="checkbox" name="terminosycond" id="terminosycond" required=""> Acepto todos los 
					      <!-- Button trigger modal -->
							<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#TernimosCondiciones">
							  Terminos y condiciones
							</button>
							<br>
							<span class="text-danger"><?php if (isset($terminosycond_error)) echo $terminosycond_error; ?></span>
					    </label>
					</div>
					<dr>
					<div class="dd-wrapper">
						<input type="submit" name="signup" value="Registrar" class="btn btn-primary" />
					</div>
					<dr>
					<div class="dd-wrapper">
						<div class="col-md-4 col-md-offset-4 text-center">	
							Ya te registaste? <a href="login.php">Logeate Aqui</a>
						</div>
					</div>

				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
</div>

<!---<img src="Imagenes/Inicio/Niños.jpg" width="300" height="300" style="margin-left: 700px; margin-top: -600px;">!-->

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


<!-- Modal -->
<div class="modal fade" id="TernimosCondiciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">
        	<b>Terminos y Condiciones </b>
        </h4>
      </div>
      <div class="modal-body">
        Mediante la simple utilización de devhuayra.com y al contratar cualquiera de los servicios ofrecidos a través de devhuayra.com, el Cliente reconoce haber leído y acepta los términos expuestos en el presente Acuerdo y / o las políticas que formen parte del mismo.
        <br>
        <br>
        <p>
        	<b>Uso de la cuenta de usuario en devHuayra.com</b>
        </p>
		<p>
			<ul>
				<li>El usuario de Registros.com se compromete a proporcionar mediante su registro datos veraces, exactos y completos sobre su identidad. También se compromete a revisar periódicamente la información proporcionada y garantiza la validez y la vigencia de los datos asociados tanto a su cuenta de usuario como a los productos y servicios contratados. El incumplimiento de esta condición podrá motivar la cancelación de la cuenta y la denegación al usuario el acceso a los servicios de Registros.com de forma temporal o permanente.</li>
				<li>Registros.com se reserva el derecho de solicitar la verificación y / o actualización de la información proporcionada por el Cliente, quien deberá responder satisfactoriamente a la petición de Registros.com en el plazo máximo de 5 días laborables. El Cliente entiende y acepta que el no cumplimiento de este requisito constituye una vulneración del presente Acuerdo y puede dar lugar a la cancelación de los productos y/o servicios cont...</li>
				<br>
				<a href="#" class="btn btn-default btn-xs">
					<span class="glyphicon glyphicon-cloud-download" aria-hidden="true"></span> Descargar PDF
				</a>
			</ul>
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
        <!--button type="button" class="btn btn-primary">Guardar Cambios</button-->
      </div>
    </div>
  </div>
</div>

<script>
	//Modal terminos y condiciones
	$('#TernimosCondiciones').on('shown.bs.modal', function () {
	  $('#myInput').focus()
	})
</script>