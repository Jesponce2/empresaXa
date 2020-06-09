<!DOCTYPE html>
<html>
<head>
	<title>Foro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
</head>
<body >
	
<header class="header" >

		<?php 



 




echo'<div class="topnav" id="myTopnav">
	<ul>
		<li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" class="icono"></i></a></li>
  <li><a class="active" href="#home"></a>
  	
  </li>
  <li><a href="#news">News</a></li>
  <li><a href="#">Contacto</a></li>
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
	
	<!--Slider-->
	
<section id="chat">
	<h1>¡BIENVENIDO AL ChatX!
	</h1>


	<form method="POST">
		<?php 
	
	echo '<label id="mensaje">'.$_POST['mensaje'].'</label><br>';
	$mensaje=$_POST['mensaje'];
	if ($mensaje=="Informes") {
		echo '<label id="resp">¡BIENVENIDO!<br>Comunicate al 477-653-72-65 </label>';
	}
	 ?><br>
		<textarea name="mensaje" placeholder=" "></textarea>
		<input type="submit" name="chat" value="Enviar">
	</form>
</section>

<style type="text/css">
	@media screen and (max-width: 690px) {
  #chat{
		margin-top: -10%;
	}
	#resp{
		background-color: gray;
		margin-left:  0%;
		float: left;
		border-radius: 1em;
	}
	h1{
		text-align: center;
	}
	form{
		
		margin-right: 1%;
		margin-left:-10 %;
		
	}
	#mensaje{
		background-color: green;
		border-radius: 1em;
		width: 10%;
		margin-left: 0%;

	}
  }

	#chat{
		margin-top: -10%;
		width: 100%;
	}
	#resp{
		background-color: gray;
		margin-left:  0%;
		float: left;
		border-radius: 1em;
	}
	h1{
		text-align: center;
	}
	form{
		
		margin-right: 40%;
		margin-left: 40%;
		
	}
	#mensaje{
		background-color: green;
		border-radius: 1em;
		width: 10%;
		margin-left: 0%;

	}
</style>

























</body>

</html>