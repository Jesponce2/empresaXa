<!DOCTYPE html>
<html>
<head>
	<title>EmpresaX</title>
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
<section class="headerInfo"><h1>EmpresaX</h1></section>

</header>
<!--Info-->
<section class="Info">

	<h1>Bolsa de trabajo</h1>
<center>	
<div>
	<a href=""><i class="fa fa-upload" aria-hidden="true" > <p style="font-size: 20px;font-family: Arial, sans-serif;">Sube tu doumentacion</p></i></a>
	<a href="vacantes.php"><i class="fa fa-briefcase" aria-hidden="true"><p style="font-size: 20px;font-family: Arial, sans-serif;">Encuentra vacantes</p></i>
</a>
<a href="foro-chat.php"><i class="fa fa-comments" aria-hidden="true"><p style="font-size: 20px;font-family: Arial, sans-serif;">Chat </p></i>
</i></a>

</div></center>
<p>Buscas trabajo</p>
<p>EmpresaX te contrata, todo tipo de vacantes en nuesta empresa.</p><br>
</section>
<!--imagen!-->
<section class ="news">
	<span>Ultimas personas empleadas en nuestra empresa</span>

	<div>
		<aside id="empleados">
			<article><img src="img/empleado1.jpg">
			<p>Carlos Lang</p>
			<p>Programador enneiger</p>
			<p>24/Mayo/2020</p>
			<input type="submit" name="vermas" value="Ver más">
		</article>
			
			
		</aside>
	</div>

</section>























<footer class="footer">


<div id="footer">
	<div class="topnav" id="myTopnav">
	<ul>
		<li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" class="icono"></i></a></li>
 
  	
  </li>
  <li><a href="#news">News</a></li>
  <li><a href="#">Contacto</a></li>
  <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>
</a></li>


</ul>
</div>
</div>
</footer>




</body>

</html>