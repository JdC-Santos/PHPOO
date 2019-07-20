<?php 

/**
 * O objetivo aqui nao é escrever todos os atributos ou metodos que seriam
 * necessarios em um sistema de gerenciamento ou coisa do tipo, mas sim
 * treinar herança, polimorfismo, associação, abstração, e outras coisinhas
 * por isso pode ser que encontre metodos vazio ou com somente um "echo"
 */

/**
 *	Dando include nas Classes para poder usa-las
 */
	include_once 'Classes/Cirurgiao.php';
	include_once 'Classes/Anestesista.php';
	include_once 'Classes/Sala.php';
	
	echo "Ao instanciar o Cirurgiao o metodo constructor dele da um echo:<br>";
	$c1 = new Cirurgiao;
	$c1->setId(1);
	echo "<br>---------------------------------------<br>";
	$c1->operar();
	echo "<br>---------------------------------------<br>";
	/**
	 * Fazendo um teste: ao sobrecrever um metodo, vc pode tornar ela publica, privada, ou protected.
	 * Entao alem do corpo, é possivel mudar a visibilidade dela!
	 */
	$c1->teste();

	$a1 = new Anestesista;
	$a1->setId(2);
	
	$sala = new Sala;
	echo "<br><br>adicionando o cirurgião e o anestesita na sala:";
	$sala->adicionaMedico($c1);
	$sala->adicionaMedico($a1);

	echo "<pre>";
	print_r($sala->getMedicos());
	echo "</pre>";

	echo "removendo o Cirurgiao:";
	$sala->removeMedico($c1);

	echo "<pre>";
	print_r($sala->getMedicos());
	echo "</pre>";	

	