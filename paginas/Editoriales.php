<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Editoriales.css">
</head>
<body id="fondo">
	<br>
	<br>
	<br>
	<br>
	<form action="gedit.php" method="POST" class="form">
		<center><img src="../Diseño/imagenes/book.png" style=" width: 80px;height: 80px;border: 0;"></center>
		<center><h1 id="t3">Editoriales</h1></center>
		<center>
			<br><br>
			<label class="et">Editorial</label> <br>
			<input class="intext" type="text" name="editorial" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Ciudad</label> <br>
			<input class="intext" type="text" name="ciudad" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras"/><br> <br>
			<label class="et">Estado</label> <br>
			<input class="intext" type="text" name="estado" value="" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras"/><br> <br>
			<input type="submit" class="btn btn1" value="Enviar">
		</center>
	</form>	
</body>
</html>