<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php 
		require 'Banco.php';

		$b1 = new Banco;

		$b1->abrirConta(132,'cc','jhow');
		$b1->depositar(12.00);
		$b1->sacar(50);
		$b1->pagarMensal();
		$b1->fecharConta();

		print_r($b1);

	?>
	</pre>
</body>
</html>