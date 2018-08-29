<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 7 agregação + encapsulamento</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Livro.php';
		$p1 = new Pessoa('Joao',31,'masculino');

		print_r($p1);
		//livro(titulo,autor,totalpagina,leitor);
		$l1 = new Livro('Ola mundo','Hel Low ord',60,$p1);

		print_r($l1);
		
		$l1->avancarPag(59);
		$l1->folhear();
		$l1->folhear();
		$l1->detalhes();
	?>
	</pre>
</body>
</html>