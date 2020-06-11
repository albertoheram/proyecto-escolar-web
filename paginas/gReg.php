<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	//$id_autor = $_POST['id_autor'];
	$id_regalia = $_POST['id_regalia'];
	$rini_r = $_POST['rini_r'];
	$rfin_r = $_POST['rfin_r'];
	$regalias = $_POST['regalias'];
	$id_titulo = $_POST['id_titulo'];
	//sentencia
	mysqli_query($conexion,"INSERT INTO regalias VALUES (NULL,'$rini_r','$rfin_r','$regalias',
		'$id_titulo')");
	mysqli_close($conexion);
	header('Location:index.php');
?>