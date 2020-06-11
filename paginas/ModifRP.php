<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_regalia = $_REQUEST['id_regalia'];
	$rini_r = $_POST['rini_r'];
	$rfin_r = $_POST['rfin_r'];
	$regalias = $_POST['regalias'];
	$id_titulo = $_POST['id_titulo'];
	//sentencia
	mysqli_query($conexion,"UPDATE regalias SET id_regalia = '$id_regalia', rini_r = '$rini_r', rfin_r = '$rfin_r',
		regalias = '$regalias', id_titulo = '$id_titulo' WHERE id_regalia = '$id_regalia'");
	mysqli_close($conexion);
	header('Location:index.php');
?>