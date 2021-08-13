<?php
#condiciones
#
$a= 5;
$b= 10;
if($a>$b){
echo "a es menor que $b";
}
else if ($a==$b){
	echo "a es igual que b";
}
else{
echo "a es mayor que b";
}
echo "<br><br>"; 

 #SWItCH
$dia= "lunes";

switch($dia){
	case 'sabado':
		echo "estudio";
	break;

	case 'viernes':
		echo "fiesta";
	break;

	case 'domingo':
		echo "descanso";
	break;

	default: echo "en la u";
}

echo "<br><br>";
#ciclos repetitivo
$n=1;
#while
while($n<=5){
	
	echo $n;
	$n++;
}


echo "<br><br>";
$m=1;
#Do while
do{
	echo $m;
	$m++;
}
while($m<5);

echo "<br><br>"; #salto de linea <br>

# Ciclo FOR
$x=0;
for($x;$x<5;$x++){
	echo $x;
}
?>