<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Autor.css">
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
	<form action="gautor.php" method="POST" class="form">
		<center><h1 id="t3">Autor</h1></center>
		<center>
			<!--<label class="et">ID</label> <br>
			<input class="intext" type="number" name="id_autor" value="" min="1" required title="Utiliza solo números"/>
			<br><br>-->
			<label class="et">Nombre</label> <br>
			<input class="intext" type="text" name="Nombre_autor" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Apellido</label> <br>
			<input class="intext" type="text" name="ap_autor" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Teléfono</label> <br> 
			<input class="intext" type="tel" name="tel_autor" value="" min="1" required title="Utiliza solo números"/><br> <br>
			<label class="et">Calle</label> <br>
			<input class="intext" type="text" name="calle_autor" value="" required pattern="{1,30}" title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Ciudad</label> <br>
			<input class="intext" type="text" name="ciudad_autor" value="" required pattern="{1,30}" title="Completa este campo utilizando solo letras" /> <br> <br>
			<abel class="et">Estado</label> <br>
			<input class="intext" type="text" name="estado_autor" value="" required pattern="{1,30}" title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">País</label> <br>
			<input class="intext" type="text" name="pais_autor" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<?php
	//conexion a BD
	/*$conexion = mysqli_connect("localhost","root","","librerias");
	$id_autor = $_POST['id_autor'];
	$Nombre_autor = $_POST['Nombre_autor'];
	$ap_autor = $_POST['ap_autor'];
	$tel_autor = $_POST['tel_autor'];
	$calle_autor = $_POST['calle_autor'];
	$ciudad_autor = $_POST['ciudad_autor'];
	$estado_autor = $_POST['estado_autor'];
	$pais_autor = $_POST['pais_autor'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO autor VALUES ('$id_autor','$Nombre_autor','$ap_autor','$tel_autor',
		'$calle_autor','$ciudad_autor','$estado_autor','$pais_autor')");
	mysqli_close($conexion);
	//header('Location:../index.php');*/
?>
			<input type="submit" class="btn btn1" value="Enviar"> 
		</center>
	</form>
</body>
</html>