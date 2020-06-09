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
  <li><a class="active" href="postulaciones.php">Postulaciones</a>
  	
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
<h1>Administrador de Vacantes</h1>
<form action="privado.php" method="POST" id="registros">
	<input type="text" name="puesto" placeholder="Ingresa la vacante"><br>	
	<input type="text" name="salario" placeholder="Ingresa el salario"><br>	
	<input type="file" name=""><br>	
	<label>Ingresa la descripcion de la vacante</label><br>	
	<textarea name="descripcion"></textarea><br>	
	<input type="submit" name="Registrar" value="Registrar"  onclick="alert('Se registro correctamente.')" ><br>	
</form>
</section>
<style type="text/css">
	section{
		margin-top: -10%;
	}
	h1{
		text-align: center;
	}
	form{
		width: 40%;
		margin-left: 30%;
		padding-top: 1%;
		background-color: rgba(0,0,0,0.3);
		text-align: center;

	}
	input, textarea{
		width: 50%;
		margin-left: 25%;
		display: block;
		text-align: center;
		background-color: rgba(0,0,0,0.1);
		border-radius: .1em;

	}
	input[type="submit"]{
		width: 50%;
		margin-left: 25%;
		background-color: gray;
		cursor: pointer;
	}
	@media screen and (max-width: 690px) {
  form{
		width: 90%;
		margin-left: 5%;
		padding-top: 1%;
		background-color: rgba(0,0,0,0.3);
		text-align: center;

	}
	input{
		width: 80%;
		margin-left: 8%;
		display: block;
		text-align: center;
		background-color: rgba(0,0,0,0.1);
		border-radius: .1em;
	}
	 textarea{
		width: 80%;
		margin-left: 8%;
		display: block;
		text-align: center;
		background-color: rgba(0,0,0,0.1);
		border-radius: .1em;

	}
	input[type="submit"]{
		width: 60%;
		margin-left: 8%;
		background-color: gray;
		cursor: pointer;
	}
  }
</style>
</body>
</html>