<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php
		require_once 'Caneta.php';

		$c1 =  new Caneta('BIC','preta',0.5);
		// $c1->modelo = 'Batata';//funciona pois eh public
		// $c1->setModelo('BIC');
		// $c1->ponta =1;//nao funciona pois eh privado
		// $c1->setPonta(0.5);
		// print"Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
		print_r($c1);
	?>
	</pre>
</body>
</html>