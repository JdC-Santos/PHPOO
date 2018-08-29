<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 3 aprendendo a usar getters, setters e construct</title>
</head>
<pre>
<body>
	<?php
		require_once('Caneta.php');		
		
		$c1 = new Caneta('RIC','Preto',0.6);

		print_r($c1);
		print "Caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
		echo "<br><br>";
		$c1->setModelo('BIC');
		$c1->setPonta(0.5);
		print_r($c1);

		echo "Caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";

	?>
	</pre>
</body>
</html>