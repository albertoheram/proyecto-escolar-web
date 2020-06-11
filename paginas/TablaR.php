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
					<th colspan="1" class="<?php echo $pagina == 'regalias' ? 'active' : ''; ?>" ><a href="?p=Regalias.php" style="color:white">Insertar</a></th>
					<th colspan="10">Regalías</th>
				</tr>
			</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>Rango Inicial</td>
						<td>Rango final</td>
						<td>Regalía</td>
						<td>id_titulo</td>
						<td colspan="2"></td>
					</tr>
					<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					$salida = "";
					$pagina = isset($_GET['pagina']) ?$_GET['pagina']: null;
					$query = "SELECT * FROM regalias ORDER BY id_regalia";
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
						regalias WHERE id_regalia LIKE '%$q%' ";
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
								<td><?php echo $fila['id_regalia'];?></td>
								<td><?php echo $fila['rini_r'];?></td>
								<td><?php echo $fila['rfin_r'];?></td>
								<td><?php echo $fila['regalias'];?></td>
								<td><?php echo $fila['id_titulo'];?></td>
								<td><a href="ModifR.php?id_regalia=<?php echo $fila['id_regalia']?>">Modificar</a></td>
								<td><a href="ElimR.php?id_regalia=<?php echo $fila['id_regalia']?>">Eliminar</a></td>
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