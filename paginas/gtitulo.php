<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	//$id_autor = $_POST['id_autor'];
	$titulo = $_POST['titulo'];
	$tipo = $_POST['tipo'];
	$precio = $_POST['precio'];
	$adelanto = $_POST['adelanto'];
	$ventast = $_POST['ventast'];
	$fechap = $_POST['fechap'];
	$nota = $_POST['nota'];
	$id_editorial = $_POST['id_editorial'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO titulos VALUES (NULL,'$titulo','$tipo','$precio',
		'$adelanto','$ventast','$fechap','$nota','$id_editorial')");
	mysqli_close($conexion);
	header('Location:index.php');
?>