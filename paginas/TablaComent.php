<!DOCTYPE html>
<html>
<head>
	<title>Lista de Comentarios</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Tabla1.css">
	<style type="text/css">
	</style>
</head>
<body id="fondo">
	<br>
	<center>
		<table id="Tabla" border="black">
			<thead>
				<tr>
					<th colspan="1" class="<?php echo $pagina == 'comentarios' ? 'active' : ''; ?>" ><a href="?p=Comentario.php" style="color:white">Insertar</a></th>
					<th colspan="10">Comentarios</th>
				</tr>
			</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>Observación</td>
						<td>id_autor</td>
						<td colspan="2"></td>
					</tr>
					<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					$salida = "";
					$pagina = isset($_GET['pagina']) ?$_GET['pagina']: null;
					$query = "SELECT * FROM comentarios ORDER BY id_comentario";
					//$resultado = mysqli_query($conexion,'SELECT * FROM autor');
					//$q = mysqli_escape_string($conexion,$POST['consulta']);
					//$numreg = mysqli_num_rows($resultado);
					//$q = mysqli_real_scape_string($conexion,$POST['consulta']);
					/*$query =  "SELECT id_autor, nombre_autor, apellido_autor, telefono_autor, calle_autor, ciudad_autor, estado_autor, pais_autor FROM 
						autor WHERE id_autor LIKE '%".$q."%' OR nombre_autor LIKE '%".$q."%' OR apellido_autor LIKE '%".$q."%'";*/
					if (isset($_POST['consulta'])) 
					{
						$q = mysqli_escape_string($conexion,$_POST['consulta']);
						$query =  "SELECT * FROM 
						comentarios WHERE id_comentario LIKE '%$q%' OR id_autor LIKE '%$q%' ";
					}
					//$res = $mysqli->query($query);
					$res = mysqli_query($conexion,$query);
					$enlace = "Modificar_autor";
					$numreg = mysqli_num_rows($res);
					if ($numreg>0)
					{
						while ($fila = $res->fetch_assoc()) 
						{	
							?>
								<tr>
								<td><?php echo $fila['id_comentario'];?></td>
								<td><?php echo $fila['observacion'];?></td>
								<td><?php echo $fila['id_autor'];?></td>
								<td><a href="ModificarComent.php?id_comentario=<?php echo $fila['id_comentario']?>">Modificar</a></td>
								<td><a href="ElimCom.php?id_comentario=<?php echo $fila['id_comentario']?>">Eliminar</a></td>
								</tr>
								<?php
						}
				
					}
					?>
				</tbody>
		</table>
	</center>
</body>
</html>