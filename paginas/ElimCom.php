<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_comentario = $_REQUEST['id_comentario'];
	//sentencia
	mysqli_query($conexion,"DELETE FROM comentarios WHERE id_comentario = '$id_comentario'");
	mysqli_close($conexion);
	header('Location:index.php');
?>