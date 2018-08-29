<!DOCTYPE html>
<html>
<head>
	<title>Encapsulamento</title>
</head>
<body>
	<pre>
	<?php 
		require 'Controle.php';
		$c1 = new Controle();
		$c1->ligar();
		$c1->maisVolume();
		$c1->abrirMenu();
		print_r($c1);
	?>
	</pre>
</body>
</html>