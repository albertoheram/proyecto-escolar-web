<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Descuentos.css">
</head>
<body id="fondo">
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="gdesc.php" method="POST" class="form">
		<center><img src="../Diseño/imagenes/book.png" style=" width: 80px;height: 80px;border: 0;"></center>
		<center><h1 id="t3">Descuentos</h1></center>
		<center>
			<br><br>
			<label class="et">Rango inicial</label> <br>
			<input class="intext" type="number" name="rinicial" step="any" min="1" value="" required title="Completa este campo utilizando solo números" /> <br> <br>
			<label class="et">Rango final</label> <br>
			<input class="intext" type="number" name="rfinal" step="any" min="1" value=""  required title="Completa este campo utilizando solo números"/><br> <br>
			<label class="et">Descuento</label> <br>
			<input class="intext" type="number" name="descuento" value="" step="any" min="1" value="" required title="Completa este campo utilizando solo números"/><br> <br>
			<select name="id_libreria" id="id_libreria" required>
			<br>
			<br>
			<option>Seleccione ID librería</option>
				<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					//$sql = "SELECT * FROM editoriales";
					//$res = mysqli_query($conexion,$sql);
					$sql = $conexion->query("SELECT * FROM librerias");
					//$numreg = mysqli_num_rows($res);
					//if ($numreg>0)
					//{
						while ($fila = $sql->fetch_array()) 
						{
							echo "<option value'".$fila['id_libreria']."'>".$fila['id_libreria']."</option>";
						}
					//}
				?>	
			</select>
			<br>
			<br>
			<input type="submit" class="btn btn1" value="Enviar">
		</center>
	</form>
</body>
</html>