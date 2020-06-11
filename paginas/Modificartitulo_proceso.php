<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_titulo = $_REQUEST['id_titulo'];
	$titulo = $_POST['titulo'];
	$tipo = $_POST['tipo'];
	$precio = $_POST['precio'];
	$adelanto= $_POST['adelanto'];
	$ventas_totales = $_POST['ventas_totales'];
	$fecha_pub = $_POST['fecha_pub'];
	$nota = $_POST['nota'];
	$id_editorial = $_POST['id_editorial'];
	//sentencia
	mysqli_query($conexion,"UPDATE titulos SET id_titulo = '$id_titulo', titulo = '$titulo', tipo = '$tipo',
		precio = '$precio', adelanto = '$adelanto', ventas_totales = '$ventas_totales', fecha_pub = '$fecha_pub', 
		nota = '$nota', id_editorial = $id_editorial WHERE id_titulo = '$id_titulo'");
	mysqli_close($conexion);
	header('Location:index.php');
?>