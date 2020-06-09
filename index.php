<!DOCTYPE html>
<html>
<head>

	<title>Inicia sesion</title>
	<meta charset="utf-8">
</head>
<body>
	
<form action="validar.php" method="POST">
	<span>Inicia sesion para comenzar</span><br>
		<input type="text" name="user" placeholder="Ingresa un nombre de usuario" required ><br>
	    <input type="email" name="correo" placeholder="Ingresa tu correo" required><br>
		<input type="password" name="contraseña" placeholder="Ingresa tu contraseña" required><br>
		<input type="submit" name="iniciar" value="Ingresa" id="boton" >

</form>

<style type="text/css">
body{
	text-align: center;	
	font-family: Arial, sans-serif;
	background-color: #030D1C;
	color: white;
}
form{
	background-color: rgba(0,0,0,0.4);
	width: 30%;
	margin-left: 33.3%;
	margin-top: 10%;
	display: block;
	height: 50%;
	position: absolute;
	padding-top: 3%;
	border-radius: 1em;
}
input {
	width: 80%;
	margin-top: 4%;
	height: 10%;
	background-color: rgba(0,0,0,0.3);
	color: white;
	text-align: center;
	border-radius: 0.2em;

}
input[type="submit"]{
	width: 40%;
	background-color: #006089;
}
input[type="submit"]:hover{
	background-color: rgba(0,0,0,0.2);
}
@media (max-width: 690px) {
  form{
  	width: 100%;
  	height: 60%;
  	margin-left: 0%;
  }
}
</style>
</body>
</html>