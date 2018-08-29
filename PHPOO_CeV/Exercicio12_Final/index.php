<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio final do CeV</title>
</head>
<body>
	<pre>
		<?php 
			require_once 'Video.php';
			require_once 'Gafanhoto.php';
			require_once 'Visualizacao.php';
			//instanciando
			$v[0] = new Video('Aula 1 de POO');
			$v[1] = new Video('Aula 12 de PHP');
			$v[2] = new Video('Aula 15 de HTML5');

			print_r($v);
			$g[0] = new Gafanhoto('Joao,',22,"masc",'jaca');
			$g[1] = new Gafanhoto('Maria,',21,"Fem",'Bou');
			print_r($g);

			$vis[0] = new Visualizacao($g[1],$v[0]);
			$vis[0]->avaliarNota(6);
			$vis[1] = new Visualizacao($g[1],$v[2]);
			

			print_r($vis);
		?>
	</pre>
</body>
</html>