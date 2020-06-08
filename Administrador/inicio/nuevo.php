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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<script src="js/bootstrap.min.js"></script>	
</head>

<body>
	<div class="contain">

		<div class="wrapper">
			<div class="row">
				<h3 style="text-align:center"></h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="password" name="password" placeholder="Password">
					</div>
				</div>
				<!--
				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
					<div class="col-sm-10">
						<select class="form-control" id="estado_civil" name="estado_civil">
							<option value="SOLTERO">SOLTERO</option>
							<option value="CASADO">CASADO</option>
							<option value="OTRO">OTRO</option>
						</select>
					</div>
				</div>
				-->
				<div class="form-group">
					<label for="hijos" class="">¿Conectar Users?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="estado" name="estado" value="1" checked> Si
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="estado" name="estado" value="0"> No
						</label>
					</div>
				</div>
				<!--
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros"> Libros
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica"> Musica
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes"> Deportes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros"> Otros
						</label>
					</div>
				</div>
				-->
				<div class="form-group">
					<a href="index.php" class="">Regresar</a>
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
			<div class="contacts">
				<!--<center><img src="pictures/Mapa.jpg" height="350" width="950"></center>-->
				<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Password</th>
							<th>Estado</th>
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
								<td><?php echo $row['estado']; ?></td>
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
			</div>
		</div>
	</div>
</body>
</html>