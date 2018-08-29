<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 6 relacionamento entre classes(agregação)</title>
</head>
<body>
	<?php
		require_once 'Lutador.php';
		require_once('Luta.php');
		//Lutador(nome,pais,idade,altura,peso,categoria,v,d,e)
		$l1 = new Lutador('Lutador1','França',31,1.75,68.9,11,2,1);
		$l2 = new Lutador('Lutador2','Brasil',29,1.68,57.8,14,2,3);
		$l3 = new Lutador('Lutador3','EUA',35,1.65,80.9,12,2,1);
		$l4 = new Lutador('Lutador4','Australia',28,1.93,81.6,13,0,2);
		$l5 = new Lutador('Lutador5','Brasil',37,1.70,119.3,5,4,3);
		$l6 = new Lutador('Lutador6','EUA',30,1.81,105.7,12,2,4);

		$luta01 =  new Luta();
		$luta01->marcarLuta($l1,$l2);

		$luta01->lutar();
	?>
</body>
</html>