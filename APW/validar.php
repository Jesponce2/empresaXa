<?php 
	$usuario=$_POST['user'];
	$correo=$_POST['correo'];
	$contra=$_POST['contraseña'];
	if ($usuario=="AntonioP") {
		if ($correo=="102.ponce.perez.juan@gmail.com") {
			if ($contra=="ponceperezjuan") {
				header("location: privado.php");
			}else{
				header("location: principal.php");
			}
		}else{
				header("location: principal.php");
			}
	}else{
				header("location: principal.php");
			}
 ?>