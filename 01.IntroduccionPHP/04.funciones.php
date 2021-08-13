<?php
#funciones sin parametros

function saludo(){
echo "hola<br>";
}

saludo();


#funciones con parametros
function despedida($adios){

	echo $adios."<br>"; # el punto cocatena 
}
despedida("hasta luego");


#funciones con retorno
function retorno($retorna){

	return $retorna; # el punto cocatena 
}
echo retorno("<br>retornando");


?>