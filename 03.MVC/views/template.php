<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>

<?php
include "modules/estilos.php"
?>

</head>
<body>
	<header>
		<h1>LOGOTIPO</h1>
	</header>
<?php
include "modules/navegacion.php"
?>
	<section>
		<?php
			$mvc = new MvcController();
			$mvc -> enlacesPaginasController();
		?>
	</section>
</body>
</html>