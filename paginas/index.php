<!DOCTYPE html>
<html>
<head>
	<title>Lista de autores</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Tabla1.css">
</head>
<body>
	<?php
	$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio.php';
	
	require_once '1.php';
	require_once $pagina;
	require_once '2.php';
?>
</body>
