<?php
#INDEX se muestra la salida al usuario
require_once "controllers/controller.php";
require_once "models/model.php";
#require() Establece que el archivo invocado es requerido, por lo tanto obligatorio para el funcionamiento del programa. Si no se encuentra el archivo saltara un error y se detendra.

#require_once solo se usa cuando el archivo se requiere uina sola vez

$mvc = new MvcController();
$mvc -> plantilla();


?>