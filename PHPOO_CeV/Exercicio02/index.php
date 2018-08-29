<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 2 aprendendo a definir visibilidade</title>
</head>
<body>
	<?php
		require_once('Caneta.php');
		//criando um objeto da classe Caneta		
		$c1 = new Caneta;
		$c1->modelo = "bic cristal";
		$c1->cor = "preta";
		echo "<pre>";
		var_dump($c1);
		echo "</pre>";
		$c1->rabiscar();
	?>
</body>
</html>