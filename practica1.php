<?php
echo "<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>";
function mod($a,$b){
		$q=0;
		$mul=0;
		$va = abs($a);
		$mod=0;
		while($mul<=$va){
				$q=$q+1;
			$mul=$q*$b;
		}
			if($a-$mul<0)
				$q=$q-1;
			$mod=$va-($q*$b);
			if($a<0)
				$mod=($mod-$b)*(-1);
			echo "r=".$mod."";
		}
		echo"<form action='practica1.php' method='POST'>
		<label>a:</label>
		<input type='number' name='a'>
		<label>b:</label>
		<input type='number' name='b'>
		<input type='submit'>
		</form>";	
		if(isset($_POST['a'])){
			$a=$_POST['a'];
			$b=$_POST['b'];
			mod($a,$b);
		}
	echo"</body>
</html>";