<?php
class MvcController{

	#LLAMADA A LA PLANTILLA
	public function plantilla(){
		include "views/template.php";
	}

	#INTERACCION CON USSUARIO
	public function enlacesPaginasController(){


		if(isset($_GET["action"])){
			$enlacesControl = $_GET["action"];
		}else{
			#echo $enlacesControl;
			$enlacesControl="index";
		}

		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesControl);

		include $respuesta;
	}
}


?>