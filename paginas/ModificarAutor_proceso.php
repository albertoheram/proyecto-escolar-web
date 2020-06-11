<?php
	//conexion a BD
	$conexion = mysqli_connect("localhost","root","","librerias");
	$id = $_REQUEST['id_autor'];
	$id_autor = $_POST['id_autor'];
	$Nombre_autor = $_POST['Nombre_autor'];
	$ap_autor = $_POST['ap_autor'];
	$tel_autor = $_POST['tel_autor'];
	$calle_autor = $_POST['calle_autor'];
	$ciudad_autor = $_POST['ciudad_autor'];
	$estado_autor = $_POST['estado_autor'];
	$pais_autor = $_POST['pais_autor'];
	//sentencia
	mysqli_query($conexion,"UPDATE autor SET id_autor = '$id_autor', nombre_autor = '$Nombre_autor', apellido_autor = '$ap_autor',
		telefono_autor = '$tel_autor', calle_autor = '$calle_autor', ciudad_autor = '$ciudad_autor', estado_autor = '$estado_autor', 
		pais_autor = '$pais_autor' WHERE id_autor = '$id'");
	mysqli_close($conexion);
	header('Location:index.php');
?>