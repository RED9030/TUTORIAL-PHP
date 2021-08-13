<?php
class  EnlacesPaginas{
	
	public function enlacesPaginasModel($enlacesModel){
		if(	$enlacesModel == "nosotros" || 
			$enlacesModel == "servicios" || 
			$enlacesModel == "contactos"){

			$module = "views/modules/".$enlacesModel.".php";

		} else if($enlacesModel == "index"){
			$module = "views/modules/inicio.php";
		}else{
			#lista
			$module = "views/modules/inicio.php";
		}

			return $module;
	}
}

?>