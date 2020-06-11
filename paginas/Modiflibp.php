<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id_libreria = $_REQUEST['id_libreria'];
	$nombre_lib = $_POST['nombre_lib'];
	$calle_lib = $_POST['calle_lib'];
	$ciudad_lib = $_POST['ciudad_lib'];
	$pais_lib = $_POST['pais_lib'];
	$cp_lib = $_POST['cp_lib'];
	//sentencia
	mysqli_query($conexion,"UPDATE librerias SET id_libreria = '$id_libreria', nombre_lib = '$nombre_lib', calle_lib = '$calle_lib',
		ciudad_lib = '$ciudad_lib', pais_lib = '$pais_lib', cp_lib = '$cp_lib' WHERE id_libreria = '$id_libreria'");
	mysqli_close($conexion);
	header('Location:index.php');
?>