<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Comentarios.css">
</head>
<body id="fondo">
	<br>
	<br>
	<br>
	<br>
	<form action="gcoment.php" method="POST" class="form">
		<center><img src="../Diseño/imagenes/book.png" style=" width: 80px;height: 80px;border: 0;"></center>
		<center><h1 id="t3">Comentarios</h1></center>
		<center>
			<br><br>
			<label class="et">Observación</label> <br>
			<textarea class="intext" name="observacion" cols="40" rows="5" required pattern="{1,50}" required title="Completa este campo utilizando solo letras"></textarea>
			<br>
			<br>
			<select name="id_autor" id="id_autor" required>
			<br>
			<br>
			<option>Seleccione ID autor</option>
				<?php
					$conexion = mysqli_connect("localhost","root","","librerias");
					//$sql = "SELECT * FROM editoriales";
					//$res = mysqli_query($conexion,$sql);
					$sql = $conexion->query("SELECT * FROM autor");
					//$numreg = mysqli_num_rows($res);
					//if ($numreg>0)
					//{
						while ($fila = $sql->fetch_array()) 
						{
							echo "<option value'".$fila['id_autor']."'>".$fila['id_autor']."</option>";
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