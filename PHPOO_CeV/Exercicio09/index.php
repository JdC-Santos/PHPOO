<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 9 classe abstrata e final</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Visitante.php';
		require_once 'Bolsista.php';
		require_once 'Tecnico.php';

		$v1 =  new Visitante;
		$v1->setNome('Juvenal');
		$v1->setIdade(22);
		$v1->setSexo('Masc');

		print_r($v1);

		$a1 = new Aluno;
		$a1->setNome('Joao');
		$a1->setIdade(15);
		$a1->setMatr(1233);
		$a1->setSexo('Masc');
		$a1->setCurso("Engenheiro");
		$a1->pagarMensal();
		print_r($a1);

		$b1 = new Bolsista;
		$b1->setNome('Beatriz');
		$b1->setIdade(30);
		$b1->setSexo('Fem');
		$b1->setBolsa('30%');
		$b1->setMatr(6656);
		$b1->setCurso('Enfermagem');
		$b1->renovarBolsa();
		$b1->pagarMensal();

		print_r($b1);

		$t1 = new Tecnico;
		$t1->setNome('Jose');
		$t1->setIdade(22);
		$t1->setMatr('3453');
		$t1->setCurso('Meio Ambiente');
		$t1->setRegPro(232332);
		$t1->setSexo('masc');
		$t1->praticar();

		print_r($t1);
	?>
	</pre>
</body>
</html>