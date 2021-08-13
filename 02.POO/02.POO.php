<?php

#Codigo POO

#Clases: es un modelo que se usa para crear objets que comparten un mismo comportamiento, estado e identidad

class Automovil{
	#Propiedades
	#Son caracteristicas del objeto

	#Publicas public
	public $marca;
	public $modelo;

	#Privadas private

#Metodos: Algoritmo asociado a un objeto e indica la capacidad de este.
 	#los metodos siempre estan dentro de una clase

	#Diferencia entre metodo y funcion: metodo es la función de una clase en POO y función son los algoritmos de la programación estructurada
	public function mostrar(){
			echo "<p>Hola soy un $this->marca, modelo $this->modelo </p>";
	}


}

#OBJETO: Conjunto de metodos o mensajes con  propiedades con valores concretos.

$a = new Automovil();
$a -> marca = "Toyota";
$a -> modelo = "RAV4";
$a -> mostrar();

$b = new Automovil();
$b -> marca = "Hyundai";
$b -> modelo = "Tucson";
$b -> mostrar();
?>