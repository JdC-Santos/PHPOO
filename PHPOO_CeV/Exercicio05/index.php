<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 5 Encapsulamento</title>
</head>
<body>
	<?php
		require_once('Controle.php');
		$c1 = new Controle;
		$c1->ligaDesliga();
		echo $c1->abreMenu();
		$c1->fechaMenu();
		$c1->ligaDesliga();
		$c1->menosVolume();
		echo "Liguei a TV e abaixei o volume<br>";
		$c1->ligaDesliga();
		$c1->menosVolume();
		echo $c1->abreMenu();
	?>
</body>
</html>