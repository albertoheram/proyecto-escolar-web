<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Librerias.css">
</head>
<body id="fondo">
	<br>
	<br>
	<br>
	<br>
	<form action="glib.php" method="POST" class="form">
		<center><img src="../Diseño/imagenes/book.png" style=" width: 80px;height: 80px;border: 0;"></center>
		<center>
			<br><br>
			<label class="et">Nombre</label> <br>
			<input class="intext" type="text" name="nombre_lib" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Calle</label> <br>
			<input class="intext" type="text" name="calle_lib" value="" required pattern="{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Ciudad</label> <br>
			<input class="intext" type="text" name="ciudad_lib" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">País</label> <br>
			<input class="intext" type="text" name="pais_lib" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Código postal</label> <br>
			<input class="intext" type="number" name="cp_lib" value="" required pattern="([1-9][1-9][1-9][1-9][1-9]){1,5}" min="1" title="Utiliza solo números"/> <br> <br>
			<input type="submit" class="btn btn1" value="Enviar"> 
		</center>
	</form>
</body>
</html>