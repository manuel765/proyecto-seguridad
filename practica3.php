<?php
echo "<!DOCTYPE html>
		<html>
			<head>
				<title>Practica 3</title>
			</head>
		<body>
			<form action='practica3.php' method='POST'>
				<label>Introduzca su enunciado</label>
				<input type='text' name='enun'><br/>
				<label>numero del playfair</label>
				<input type='number' name='num'>
				<input type='hidden' name='verificador'>
				<input type='submit'>
			<form>
			<br/>";		
		if(isset($_POST['verificador'])){
		echo "<em>Su cifrado es: </em>";
		$n=$_POST['num'];
		$frase=$_POST['enun'];
		$lon=strlen($frase);
		$con=0;
		for($x=0;$x<$lon;$x++){
			if($frase[$x]!=' ')
					$frasemod[$con]=$frase[$x];
				else
					$con=$con-1;
			$con=$con+1;
			}
		$frasemod = implode('',$frasemod);
		$lonmod=strlen($frasemod);
		$div=$lonmod/$n;
		if($lonmod%$n!=0)
			$div=$div+1;
		for($x=0;$x<$n;$x++)
			for($y=0;$y<$div;$y++){
				$pos=($n*$y)+$x;
				if(isset($frasemod[$pos]))
				echo $frasemod[$pos];
			}
			}
echo "	</body>
		</html>";
?>