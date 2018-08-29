<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		require_once 'Ventilador.php';

		$v1 = new Ventilador;
		$v1->cor = 'Azul';
		if(isset($_GET['rot'])){
			$v1->Rotacao($_GET['rot']);
		}
		if(isset($_GET['lig'])){
			$v1->forca =$_GET['lig'];
		}

		print_r($v1);

	?>
	<br><a href="?rot=0">Ligar rotacao</a><br>
	<a href="?rot=1">Desligar rotacao</a><br>
	<hr>
	<a href="?lig=1">Ligar Ventilador</a><br>
	<a href="?lig=0">Desligar ventilador</a>
</body>
</html>