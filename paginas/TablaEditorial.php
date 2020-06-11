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
					<th colspan="1" class="<?php echo $pagina == 'Autor' ? 'active' : ''; ?>" ><a href="?p=Editoriales.php" style="color:white">Insertar</a></th>
					<th colspan="9">Editoriales</th>
				</tr>
			</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Ciudad</td>
						<td>Estado</td>
						<td colspan="2"></td>
					</tr>
					<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					$salida = "";
					$pagina = isset($_GET['pagina']) ?$_GET['pagina']: null;
					$query = "SELECT * FROM editoriales ORDER BY id_editorial";
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
						editoriales WHERE id_editorial LIKE '%$q%' OR editorial LIKE '%$q%' OR ciudad LIKE '%$q%' OR estado LIKE '%$q%'";
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
								<td><?php echo $fila['id_editorial'];?></td>
								<td><?php echo $fila['editorial'];?></td>
								<td><?php echo $fila['ciudad'];?></td>
								<td><?php echo $fila['estado'];?></td>
								<td><a href="Modificar_edit.php?id_editorial=<?php echo $fila['id_editorial']?>">Modificar</a></td>
								<td><a href="Eliminar_edit.php?id_editorial=<?php echo $fila['id_editorial']?>">Eliminar</a></td>
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