<?php
$vigenere = array('a' => 0,'b' =>1 ,'c' => 2,'d' => 3,'e' => 4,'f' =>5 ,'g' => 6,'h' => 7,'i' => 8,'j' => 9,'k' => 10,'l' => 11,'m' => 12,'n' => 13,'o' => 14,'p' => 15,'q' => 16,'r' => 17,'s' => 18,'t' => 19,'u' => 20,'v' => 21,'w' => 22,'x' => 23,'y' => 24,'z' => 25);
$letras=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
function consonantes($cad)
{
	$ab=array("b","c","d","f","g","h","j","k","l","m","n","ñ","p","q","r","s","t","v","w","x","y","z");
	$z=0;
	$lon=strlen($cad);
	for($x=1;$x<$lon;$x++)
		for($y=0;$y<22;$y++)
		{
			if($cad[$x]==$ab[$y])
			{
				$conso[$z]=$cad[$x];
				$z++;
			}
		}
		return implode($conso);
}

$Nom=$_GET['nom'];
$Ap=$_GET['ap'];
$Am=$_GET['am'];
$Fec=$_GET['fec'];
$Clav=$_GET['clav'];
$Sex=$_GET['sex'];
$Tar=$_GET['tar'];

$Nom=strtolower($Nom);
$Ap=strtolower($Ap);
$Am=strtolower($Am);
$ape=($pr=substr($Ap,0,2));//ya se puede cambiar
$se=substr($Am,0,1);
$ter=substr($Nom,0,1);

$cu=substr($Fec,2,2);
$cu1=substr($Fec,5,2);
$cu2=substr($Fec,8,2);

$a1=substr($Fec,0,4);

$nu=substr(consonantes($Nom),0,1);
$di=substr(consonantes($Ap),0,1);
$on=substr(consonantes($Am),0,1);
$do=$a1<2000?0:'A';
echo "<em>Su curp es:</em".$cu=strtoupper($ape.$se.$ter.$cu.$cu1.$cu2.$Sex.$Clav.$di.$on.$nu.$do);
echo"<br/>";
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
			return $mod;		}
$equivalencia = array('0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'A'=>10,'B'=>11,'C'=>12,'D'=>13,'E'=>14,'F'=>15,'G'=>16,'H'=>17,'I'=>18,'J'=>19,'K'=>20,'L'=>21,'M'=>22,'Ñ'=>23,'N'=>24,'O'=>25,'P'=>26,'Q'=>27,'R'=>28,'S'=>29,'T'=>30,'U'=>31,'V'=>32,'W'=>33,'X'=>34,'Y'=>35,'Z'=>36);
$a=0;
$suma=0;
for($x=18;$x>=3;$x--){
	$mul=$x*($equivalencia[$cu[$a]]);
	$con=$mul;
	$suma=$con+$suma;
	echo $cu[$a];
	$a=$a+1;
}
$a18=mod($suma,10);
if($cu[4]==0){
	$a18=mod((10-$a18),10);
}
echo $a18."<br/>";
$convisa=0;
$r=0;
for($x=0;$x<15;$x++){
	if(mod($x,2)==0)
	$visamul=2*$Tar[$x];
	else
	 $visamul=$Tar[$x];
	$convisa=$convisa+$visamul;
	if($visamul>=10)
		$r++;
}
$visaver=mod(($convisa-$r),10);
if($visaver==$Tar[15])
	echo "<em>Su visa es: </em>Tarjeta correcta<br/>";
else
	echo "<em>Su visa es: </em>Tarjeta falsa<br/>";

$mensaje=$_GET['men'];
$clave=$_GET['clave'];
echo "<em>Su mensaje es: </em>".$mensaje."<br/>";
echo "<em>Su clave es:</em>".$clave."<br/>";
$lonmen=strlen($mensaje);
$loncla=strlen($clave);
$concla=0;
for($x=0;$x<$lonmen;$x++){
	if($mensaje[$x]==' ')
		$nl[$x]=' ';
	else{
	$valor=$vigenere[$mensaje[$x]]+$vigenere[$clave[$concla]];
	$valor=mod($valor,26);
	$nl[$x]=$letras[$valor];
	$concla++;
}
	if($concla==$loncla)
		$concla=0;
}
echo"<em>su cifrado es:</em>";
for($x=0;$x<$lonmen;$x++)
	echo $nl[$x];
			echo"<form action='formulario.php' method='POST'>
			<button>Volver a llenar cuestionario</button>
			</form>
			<form action='inicia.php' method='POST'>
			<button>Cerrar sesion</button>
			</form>";
?>