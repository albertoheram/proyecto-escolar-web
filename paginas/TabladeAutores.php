<!DOCTYPE html>
<html>
<head>
	<title>Lista de autores</title>
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
					<th colspan="1" class="<?php echo $pagina == 'Autor' ? 'active' : ''; ?>" ><a href="?p=Autor.php" style="color:white">Insertar</a></th>
					<th colspan="9">Autores</th>
				</tr>
			</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Apellido</td>
						<td>Teléfono</td>
						<td>Calle</td>
						<td>Ciudad</td>
						<td>Estado</td>
						<td>País</td>
						<td colspan="2"></td>
					</tr>
					<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					$salida = "";
					$pagina = isset($_GET['pagina']) ?$_GET['pagina']: null;
					$query = "SELECT * FROM autor ORDER BY id_autor";
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
						autor WHERE id_autor LIKE '%$q%' OR nombre_autor LIKE '%$q%' OR apellido_autor LIKE '%$q%' ";
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
								<td><?php echo $fila['id_autor'];?></td>
								<td><?php echo $fila['nombre_autor'];?></td>
								<td><?php echo $fila['apellido_autor'];?></td>
								<td><?php echo $fila['telefono_autor'];?></td>
								<td><?php echo $fila['calle_autor'];?></td>
								<td><?php echo $fila['ciudad_autor'];?></td>
								<td><?php echo $fila['estado_autor'];?></td>
								<td><?php echo $fila['pais_autor'];?></td>
								<td><a href="Modificar_autor.php?id_autor=<?php echo $fila['id_autor']?>">Modificar</a></td>
								<td><a href="Eliminar_autor.php?id_autor=<?php echo $fila['id_autor']?>">Eliminar</a></td>
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