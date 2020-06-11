<!DOCTYPE html>
<html>
<head>
	<title>Lista de títulos</title>
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
					<th colspan="1" class="<?php echo $pagina == 'Titulos' ? 'active' : ''; ?>" ><a href="?p=Titulos.php" style="color:white">Insertar</a></th>
					<th colspan="10">Títulos</th>
				</tr>
			</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>Título</td>
						<td>Tipo</td>
						<td>Precio</td>
						<td>Adelanto</td>
						<td>Ventas totales</td>
						<td>Fecha de publicación</td>
						<td>Nota</td>
						<td>id_editorial</td>
						<td colspan="2"></td>
					</tr>
					<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					$salida = "";
					$pagina = isset($_GET['pagina']) ?$_GET['pagina']: null;
					$query = "SELECT * FROM titulos ORDER BY id_titulo";
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
						titulos WHERE id_titulo LIKE '%$q%' OR titulo LIKE '%$q%' OR tipo LIKE '%$q%' ";
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
								<td><?php echo $fila['id_titulo'];?></td>
								<td><?php echo $fila['titulo'];?></td>
								<td><?php echo $fila['tipo'];?></td>
								<td><?php echo $fila['precio'];?></td>
								<td><?php echo $fila['adelanto'];?></td>
								<td><?php echo $fila['ventas_totales'];?></td>
								<td><?php echo $fila['fecha_pub'];?></td>
								<td><?php echo $fila['nota'];?></td>
								<td><?php echo $fila['id_editorial'];?></td>
								<td><a href="Modificar_titulos.php?id_titulo=<?php echo $fila['id_titulo']?>">Modificar</a></td>
								<td><a href="Eliminar_titulo.php?id_titulo=<?php echo $fila['id_titulo']?>">Eliminar</a></td>
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