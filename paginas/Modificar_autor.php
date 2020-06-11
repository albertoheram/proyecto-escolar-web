<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Autor.css">
	<style>
* {
    box-sizing: border-box;
  }
  
   
   #header1 {
    margin:auto;
    width:100%;
    font-family:Helvetica;
   }
   
   ul, ol {
    list-style:none;
   }
   
   .nav > li {
    float:left;
   }
   
   .nav li a {
    background-color:black;
    color:#fff;
    text-decoration:none;
    padding:10px 12px;
    display:block;
   }
   
   .nav li a:hover {
    background-color:#434343;
   }
   
   .nav li ul {
    display:none;
    position:absolute;
    min-width:140px;
   }
   
   .nav li:hover > ul {
    display:block;
   }
   
   .nav li ul li {
    position:relative;
   }
   
   .nav li ul li ul {
    right:-140px;
    top:0px;
    }
body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
#header {
    background-color: black;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
.nav1 {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}

/* Style the list inside the menu */
.nav1 ul {
    list-style-type: none;
    padding: 0;
}


/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body id="fondo">
	<br>
	<?php
		$id_autor=$_REQUEST['id_autor'];
		$conexion = mysqli_connect("localhost","root","","librerias");
		$resultado = mysqli_query($conexion,"SELECT * FROM autor WHERE id_autor = $id_autor");
		$numreg = mysqli_num_rows($resultado);
		$numreg=mysqli_fetch_assoc($resultado);		
	?>
	<header id="header">
  <font color="white"><h2 class="animated fadeIn">Librerías</h2></font>
</header>
<br>
<br>
<br>
<br>
<br>
	<form action="ModificarAutor_proceso.php?id=<?php echo $numreg['id_autor']?>" method="POST" class="form">									
		<center><img src="../Diseño/imagenes/book.png" style=" width: 80px;height: 80px;border: 0;"></center>
		<center><h1 id="t3">Autor</h1></center>
		<center>
			<label class="et">ID</label> <br>
			<input class="intext" type="number" name="id_autor" value="<?php echo $numreg['id_autor']; ?>" min="1" required title="Utiliza solo números"/>
			<br><br>
			<label class="et">Nombre</label> <br>
			<input class="intext" type="text" name="Nombre_autor" value="<?php echo $numreg['nombre_autor']; ?>" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Apellido</label> <br>
			<input class="intext" type="text" name="ap_autor" value="<?php echo $numreg['apellido_autor']; ?>" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Teléfono</label> <br> 
			<input class="intext" type="tel" name="tel_autor" value="<?php echo $numreg['telefono_autor']; ?>" min="1" required title="Utiliza solo números"/><br> <br>
			<label class="et">Calle</label> <br>
			<input class="intext" type="text" name="calle_autor" value="<?php echo $numreg['calle_autor']; ?>" required pattern="{1,30}" title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Ciudad</label> <br>
			<input class="intext" type="text" name="ciudad_autor" value="<?php echo $numreg['ciudad_autor']; ?>" required pattern="{1,30}" title="Completa este campo utilizando solo letras" /> <br> <br>
			<abel class="et">Estado</label> <br>
			<input class="intext" type="text" name="estado_autor" value="<?php echo $numreg['estado_autor']; ?>" required pattern="{1,30}" title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">País</label> <br>
			<input class="intext" type="text" name="pais_autor" value="<?php echo $numreg['pais_autor']; ?>" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<input type="submit" class="btn btn1" value="Enviar"> 
		</center>
	</form>
</body>
</html>