<!DOCTYPE html>
<html>
<head>
	<title>Reuniao</title>
</head>
<body>
	<?php 
		require_once 'Reuniao.php';

		$r1 = new Reuniao;
		$r1->dia = '20 de maio';
		$r1->hora = '13:30';
		$r1->local = 'predio das pombas';
		$r1->titulo = 'reuniao para saber qq ta akon tecendo';
		$r1->situacao ='agendada';

		$r1->AlterarHorario('15:00');
		$r1->AlterarLocal('predio das batatas');

		print_r($r1);
	?>
</body>
</html>