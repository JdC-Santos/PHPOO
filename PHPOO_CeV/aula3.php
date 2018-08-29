<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php
		require_once 'Caneta.php';

		$c1 = new Caneta;
		$c1->modelo = 'uhul';
		//um metodo publico pode alterar um atributo protegido
		$c1->destampar();
		print_r($c1);
	?>
	</pre>
</body>
</html>