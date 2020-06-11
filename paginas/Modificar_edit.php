<!DOCTYPE html>
<html>
<head>
	<title>Librerías</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Titulos.css">
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
		$id_editorial = $_REQUEST['id_editorial'];
		$conexion = mysqli_connect("localhost","root","","librerias");
		$resultado = mysqli_query($conexion,"SELECT * FROM editoriales WHERE id_editorial = $id_editorial");
		$numreg = mysqli_num_rows($resultado);
		$numreg=mysqli_fetch_assoc($resultado);		
	?>
	<header id="header">
  <font color="white"><h2 class="animated fadeIn">Editoriales</h2></font>
</header>
<br>
<br>
<br>
<br>
<br>
	<form action="Modife_p.php?id_editorial=<?php echo $numreg['id_editorial']?>" method="POST" class="form">									
		<center><img src="../Diseño/imagenes/book.png" style=" width: 80px;height: 80px;border: 0;"></center>
		<center><h1 id="t3">Editoriales</h1></center>
		<center>
			<br><br>
     		<br><br>
			<label class="et">Editorial</label> <br>
			<input class="intext" type="text" name="editorial" value="<?php echo $numreg['editorial']; ?>" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras" /> <br> <br>
			<label class="et">Ciudad</label> <br>
			<input class="intext" type="text" name="ciudad" value="<?php echo $numreg['ciudad']; ?>" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras"/><br> <br>
			<label class="et">Estado</label> <br>
			<input class="intext" type="text" name="estado" value="<?php echo $numreg['estado']; ?>" required pattern="[A-Za-z]{1,30}" required title="Completa este campo utilizando solo letras"/><br> <br>
			<input type="submit" class="btn btn1" value="Enviar">
		</center>
	</form>
</body>
</html>