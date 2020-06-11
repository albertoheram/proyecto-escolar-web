<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Titulos.css">
</head>
<body id="fondo">
	<div class="titulo">
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="gtitulo.php" method="POST" class="form">
		<center><img src="../Diseño/imagenes/book.png" style=" width: 80px;height: 80px;border: 0;"></center>
		<center><h1 id="t3">Títulos</h1></center>
		<center>
			<br><br>
			<label class="et">Título</label> <br>
			<input class="intext" type="text" name="titulo" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Tipo</label> <br>
			<input class="intext" type="text" name="tipo" value="" required pattern="{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Precio</label> <br>
			<input class="intext" type="number" name="precio" step="any" min="1" value="" required title="Completa este campo utilizando solo números" /> <br> <br>
			<label class="et">Adelanto</label> <br>
			<input class="intext" type="number" name="adelanto" step="any" min="1" value="" required title="Completa este campo utilizando solo números" /> <br> <br>
			<label class="et">Ventas totales</label> <br>
			<input class="intext" type="text" name="ventast" value="" required pattern="{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Fecha de publicación</label> <br>
			<input class="intext" type="text" name="fechap" value="" required title="Completa este campo" /> <br> <br>
			<label class="et">Nota</label> <br>
			<input class="intext" type="text" name="nota" value="" required pattern="{1,50}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<select name="id_editorial" id="id_editorial" required>
			<option>Seleccione ID</option>
				<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					//$sql = "SELECT * FROM editoriales";
					//$res = mysqli_query($conexion,$sql);
					$sql = $conexion->query("SELECT * FROM editoriales");
					//$numreg = mysqli_num_rows($res);
					//if ($numreg>0)
					//{
						while ($fila = $sql->fetch_array()) 
						{
							echo "<option value'".$fila['id_editorial']."'>".$fila['id_editorial']."</option>";
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