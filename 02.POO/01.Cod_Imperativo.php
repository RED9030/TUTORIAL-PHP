<?php

#Programacón orientada a objetos

#Codigo imperativo o espagueti


#variables
$automovil1  =(object)["marca"=>"toyota","modelo"=>"rav4"];
$automovil2 =(object)["marca"=>"hyundai","modelo"=>"tucson"];

function mostrar($automovil0){
	echo "<p>Hola! soy un automovil $automovil0->marca, modelo $automovil0->modelo</p>";
}

mostrar($automovil2);
mostrar($automovil1);

echo "<br><br>";

?>