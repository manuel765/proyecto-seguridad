<?php
echo "<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>";
$codigo = array('a'=>"4851",'b'=>"6842",'c'=>"4863",'d'=>"7864",'e'=>"4595",'f'=>"1256",'g'=>"4927",'h'=>"6248",'i'=>"8459",'j'=>"3610",'k'=>"8911",'l'=>"7812",'m'=>"1213",'n'=>"3514",'o'=>"7515",'p'=>"3116",'q'=>"7217",'r'=>"1918",'s'=>"4619",'t'=>"8520",'u'=>"1621",'v'=>"7822",'w'=>"5223",'x'=>"3624",'y'=>"7225",'z'=>"9626");
echo " <form action='practica2.php' method='POST'>
<label>codificacion</label>
<input type='text' name='pal'>
</form>";
	if(isset($_POST['pal'])){
	$palabra=$_POST['pal'];
	$lon=strlen($palabra);
	for($x=0;$x<$lon;$x++)
		echo $codigo[$palabra[$x]];
}
echo "</body>
</html>";
?>