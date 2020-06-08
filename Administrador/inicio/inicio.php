<?php
	require 'conexion.php';
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM users $where";
	$resultado = $mysqli->query($sql);
		
?>
<html lang="es">
	<head>
		<link rel="shortcut icon" href="pictures/users.png" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/css/menu.css">
	    <link rel="stylesheet" href="css/ss/fontello.css">
		<link rel="stylesheet" href="estilos.css"/>
	</head>
	
	<body>
		<div class="navegacion">
		<nav>
			<ul>
				<li><a href="inicio.php">Usurios <span class="icon icon-up-dir"></span></a></li>
				<li><a href="destinos/inicio.php">Destinos <span class="icon icon-up-dir"></span></a></li>
				<li><a href="naturales/inicio.php">Lugares <span class="icon icon-up-dir"></span></a></li>
				<li><a href="restaurante/inicio.php">Restaurante <span class="icon icon-up-dir"></span></a></li>
				<li><a href="hotel/inicio.php">Hoteles <span class="icon icon-up-dir"></span></a></li>
				<li><a href="tradiciones/inicio.php">Tradiciones <span class="icon icon-up-dir"></span></a></li>
				<li><a href="eventos/inicio.php">Eventos <span class="icon icon-up-dir"></span></a></li>
				<li><a href="galeria/inicio.php">Galeria <span class="icon icon-up-dir"></span></a></li>
				<li><a href="mapa/index.html">Maps <span class="icon icon-up-dir"></span></a></li>
			</ul>
		</nav>
	</div>
		<div class="container">
			<div class="row">
				<center><img src="pictures/logo.png" height="140" width="150" /></center>
				<h2 style="text-align:center"></h2>
				<h3 style="text-align:center">Usuarios Registrados</h3>
			</div>
			<div class="row">
				
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
					<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
				</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Password</th>
							<th></th>
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['password']; ?></td>
								<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>	