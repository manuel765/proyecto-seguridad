<?php
echo"<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
	<title></title>
</head>
<body>";
if(isset($_POST['ver'])){
	$con= mysqli_connect('localhost','root',"","REGISTRO");
	$usuario=$_POST['nom'];
	$contrasena=$_POST['con'];
	$contrasena= hash('md5',$contrasena);
	$insertar = "INSERT INTO usuarios(Usuario,Contrasena) VALUES ('$usuario','$contrasena')";
	$resultado= mysqli_query($con, $insertar);
	 if($resultado)
		header ('Location:formulario.php');
}
else{
echo "<form action='registrarte.php' method='POST'>
<label>Nombre de Usuario</label>
<input type='text' name='nom'>
<label>Contraseña</label>
<input type='password' name='con' pattern='((?=^.{9,}$)(?=.*[0-9])(?=.*[_\*\+-\.])(?![.\n])(?=.*[A-Z])(?=.*[a-z])).*'><a>9 o m&aacute;s digitos con una mayuscula, una minuscula, un n&uacute;mero y un caracter especial '_','*','+',-','.' </a>
<input type='hidden' name='ver'>
<button>Registrar</button>
</form>
</body>
</html>";
}
?>