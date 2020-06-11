
<html >
<head>
<meta charset="utf-8">
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
<body>
<header id="header">
  <font color="white"><h2 class="animated fadeIn">Librerías</h2></font>
</header>
<header1>
  <div id="header1" class="animated fadeIn">
   <ul class="nav">
    <li class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>" ><a href="?p=inicio.php" class="animated fadeInLeft">Inicio</a></li>
    <li  class="<?php echo $pagina == 'autorindex' ? 'active' : ''; ?>" ><a href="?p=autorindex.php" class="animated fadeInLeft">Autores</a>
    <li class="<?php echo $pagina == 'editoriales' ? 'active' : ''; ?>" ><a href="?p=TeditIndex.php" class="animated fadeInLeft">Editoriales</a>
    <li class="<?php echo $pagina == 'libreria' ? 'active' : ''; ?>" ><a href="?p=Libindex.php" class="animated fadeInLeft">Librerías</a>
    <li class="<?php echo $pagina == 'comentarios' ? 'active' : ''; ?>" ><a href="?p=Coment_index.php" class="animated fadeInLeft">Comentarios</a>
    <li  class="<?php echo $pagina == 'titulos' ? 'active' : ''; ?>" ><a href="?p=titulosindex.php" class="animated fadeInLeft">Títulos</a>
    <li class="<?php echo $pagina == 'ventas' ? 'active' : ''; ?>" ><a href="?p=Ventasindex.php" class="animated fadeInLeft">Ventas</a>
    <li class="<?php echo $pagina == 'ventas' ? 'active' : ''; ?>"><a href="?p=RegIndex.php" class="animated fadeInLeft">Regalías</a>
    <li class="<?php echo $pagina == 'ventas' ? 'active' : ''; ?>"><a href="?p=Descindex.php" class="animated fadeInLeft">Descuentos</a>
    </li>
  </div>
</header1>
</body>
</html>
