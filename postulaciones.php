<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body style="font-family: Arial, sans-serif;">
	<header class="header" >

		<?php 



 




echo'<div class="topnav" id="myTopnav">
	<ul>
		<li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" class="icono"></i></a></li>
  <li><a class="active" href="privado.php">Vacantes</a>
  	
  </li>
  <li><a href="index.php">Salir</a></li>
  
  <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
</a></li>


</ul>
</div>';
 ?>

	
	<!--Slider-->
	<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</header>
<section>
<h1>Administrador de Postulaciones</h1>
<h4>¡No hay postulaciones disponibles!</h4>

</section>
<style type="text/css">
	section{
		margin-top: -10%;
	}
	h1{
		text-align: center;
	}
	h4{
		text-align: center;
		color: red;
	}

</body>
</html>