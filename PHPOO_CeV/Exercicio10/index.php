<!DOCTYPE html>
<html>
<head>
	<title>Exercicio 10 Polimorfismo (sobreposição)</title>
</head>
<body>
	<?php 
		require_once 'Ave.php';
		require_once 'Reptil.php';
		require_once 'Peixe.php';
		require_once 'Mamifero.php';
		require_once 'Canguru.php';
		require_once 'Cachorro.php';

		$a = new Ave;
		$r = new Reptil;
		$p = new Peixe;
		$m = new Mamifero;

		$a->emitirSom();
		echo "<br>";
		$r->alimentar();
		echo "<br>";
		$p->emitirSom();
		echo "<br>";
		$m->locomover();
		$cang = new Canguru;
		$cang->locomover();
		echo "<br>";
		$cang->usarBolsa();
		$c1 = new Cachorro;
		echo "<br>";
		$c1->abanarRabo();


	?>
</body>
</html>