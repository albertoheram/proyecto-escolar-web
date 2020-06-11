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
					<th colspan="1" class="<?php echo $pagina == 'descuentos' ? 'active' : ''; ?>" ><a href="?p=Descuentos.php" style="color:white">Insertar</a></th>
					<th colspan="10">Descuentos</th>
				</tr>
			</thead>
				<tbody>
					<tr>
						<td>ID</td>
						<td>Rango inicial</td>
						<td>Rango final</td>
						<td>Descuento</td>
						<td>id_libreria</td>
						<td colspan="2"></td>
					</tr>
					<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					$salida = "";
					$pagina = isset($_GET['pagina']) ?$_GET['pagina']: null;
					$query = "SELECT * FROM descuentos ORDER BY id_descuento";
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
						descuentos WHERE id_descuento LIKE '%$q%'";
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
								<td><?php echo $fila['id_descuento'];?></td>
								<td><?php echo $fila['rinicial'];?></td>
								<td><?php echo $fila['rfinal'];?></td>
								<td><?php echo $fila['descuento'];?></td>
								<td><?php echo $fila['id_libreria'];?></td>
								<td><a href="ModifD.php?id_descuento=<?php echo $fila['id_descuento']?>">Modificar</a></td>
								<td><a href="ElimD.php?id_descuento=<?php echo $fila['id_descuento']?>">Eliminar</a></td>
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