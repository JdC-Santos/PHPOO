<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 1 Aprendendo a criar classe e instanciar objeto</title>
</head>
<body>
	<?php
		require_once('Caneta.php');
		//criando um objeto da classe Caneta		
		$c1 = new Caneta;
		//preenchendo os atributos
		$c1->cor = "Verde";
		$c1->ponta = 0.7;
		$c1->tampada = true;
		//mostrando o conteudo do objeto
		echo "<pre>";
		print_r($c1);
		echo "</pre>";
		//chamando os metodos do objeto
		$c1->destampar();
		$c1->rabiscar();
		$c1->tampar();
		//criando outro objeto
		$c2 = new Caneta;
		$c2->cor = "Vermelha";
		$c2->ponta = 0.5;
		$c2->carga = 100;
		//mostrando o segundo objeto...
		echo "<pre>";
		print_r($c2);
		echo "</pre>";
	?>
</body>
</html>