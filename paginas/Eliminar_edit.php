<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_editorial = $_REQUEST['id_editorial'];
	//sentencia
	mysqli_query($conexion,"DELETE FROM editoriales WHERE id_editorial = '$id_editorial'");
	mysqli_close($conexion);
	header('Location:index.php');
?>