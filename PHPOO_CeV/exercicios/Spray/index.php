<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<pre>
	<?php 
		require 'Spray.php';

		$s1 = new Spray('UltraClub','Verde',300,300,1,19.25);

		//vamos pegar um atributo
		$s1->__get('marca');
		//antes de usar o spray, temos que tirar a tampa!
		$s1->__set('tampada',0);
		//usando o spray...
		$s1->usarSpray();

		print_r($s1);
	?>
	</pre>
</body>
</html>