<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 8 Herança</title>
</head>
<body>
	<pre>
	<?php
		require_once 'Aluno.php';
		require_once 'Professor.php';
		require_once 'Funcionario.php';

		$p1 = new Aluno;
		$p1->setNome('Joao');
		$p1->setCurso('Informatica');
		$p1->setIdade(18);
		$p1->setSexo('Masculino');
		$p1->setMatricula(true);
		print_r($p1);

		$p2 = new Professor;
		$p2->setNome('Sebastiao');
		$p2->setIdade(70);
		$p2->setSexo('Masculino');
		$p2->setEspecialidade('Programacao');
		$p2->setSalario('4.99,22');
		print_r($p2);

		$p2 = new Funcionario;
		$p2->setNome('Maria');
		$p2->setIdade(30);
		$p2->setSexo('Feminino');
		$p2->setSetor('Administração');
		$p2->mudarTrabalho();
		print_r($p2);
	?>
	</pre>
</body>
</html>