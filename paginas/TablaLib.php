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
					<th colspan="1" class="<?php echo $pagina == 'Titulos' ? 'active' : ''; ?>" ><a href="?p=Librer.php" style="color:white">Insertar</a></th>
					<th colspan="10">Librerías</th>
				</tr>
			</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Calle</td>
						<td>Ciudad</td>
						<td>País</td>
						<td>Código postal</td>
						<td colspan="2"></td>
					</tr>
					<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					$salida = "";
					$pagina = isset($_GET['pagina']) ?$_GET['pagina']: null;
					$query = "SELECT * FROM librerias ORDER BY id_libreria";
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
						librerias WHERE id_libreria LIKE '%$q%' OR nombre_lib LIKE '%$q%' OR ciudad_lib LIKE '%$q%'
						 OR pais_lib LIKE '%$q%' ";
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
								<td><?php echo $fila['id_libreria'];?></td>
								<td><?php echo $fila['nombre_lib'];?></td>
								<td><?php echo $fila['calle_lib'];?></td>
								<td><?php echo $fila['ciudad_lib'];?></td>
								<td><?php echo $fila['pais_lib'];?></td>
								<td><?php echo $fila['cp_lib'];?></td>
								<td><a href="Modiflib.php?id_libreria=<?php echo $fila['id_libreria']?>">Modificar</a></td>
								<td><a href="Elimlib.php?id_libreria=<?php echo $fila['id_libreria']?>">Eliminar</a></td>
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