<header class="header" >
<?php
include('sesion.php');
?>
		<?php 



 

$nom=$_SESSION['usuario'];


echo'<div class="topnav" id="myTopnav">
	<ul>
		<li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" class="icono"></i></a></li>
  <li><a class="active" href="#home">'.$nom.'</a>
  	
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