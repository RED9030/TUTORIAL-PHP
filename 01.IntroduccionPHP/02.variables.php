<?php
$numero = 5;#variable numerica
echo "Esto es una variable numero $numero";
echo "<br><br>";

#variable string
$palabra="palabra";
echo "esto es una variable string $palabra";
echo "<br><br>";

#variable booleana
$booleana=true;
$booleana2=False;
echo "esto es una variable bool verdadera $booleana";
echo "<br>";
echo "esto es una variable bool falsa $booleana2";#se muestra como vacio
echo "<br><br>";

#variable de tipo arreglo
$conjunto=array("rojo", "amarillo", "azul");
echo "esto es una variable arreglo $conjunto[0]";
echo "<br><br>";

#variable de tipo arreglo con propiedades
$conjunto2=array("verdura1"=>"Lechuga","verdura2"=>"pimiento");
echo "esto es una variable arreglo con propiedades $conjunto2[verdura1]";
echo "<br><br>";

#variable de tipo objetos
$frutas = (object)["fruta1"=>"pera", "fruta2"=>"Manzana"];
echo "esta es una var objeto:  $frutas->fruta1";

?>