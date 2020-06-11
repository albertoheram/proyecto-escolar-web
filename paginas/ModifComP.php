<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_comentario = $_REQUEST['id_comentario'];
	$observacion = $_POST['observacion'];
	$id_autor = $_POST['id_autor'];
	//sentencia
	mysqli_query($conexion,"UPDATE comentarios SET id_comentario = '$id_comentario', observacion = '$observacion',
	id_autor = '$id_autor' WHERE id_comentario = '$id_comentario'");
	mysqli_close($conexion);
	header('Location:index.php');
?>