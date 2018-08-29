<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 4 Criando classe para conta em banco</title>
</head>
<body>
	<pre>
	<?php
		require_once 'ContaBanco.php';
		//instancia um novo objeto da classe Banco;
		$cliente1 = new ContaBanco('2020','cc','joao');
		//abre a conta;
		$cliente1->abrirConta('Araci','cc',500);
		//mostra o objeto cliente1;
		print_r($cliente1);
		//insere um novo numero para a conta;
		$cliente1->setNumConta('111');
		// mostra o numero da conta;
		echo "Numero da conta: ".$cliente1->getNumConta().'<br>';
		//insere um novo tipo de conta;
		$cliente1->setTipo('cp');
		//mostra o tipo da conta;
		echo "Tipo da conta: ".$cliente1->getTipo().'<br>';
		//altera o nome do dono da conta;
		$cliente1->setDono('Juam Gregory de La Paz dos Santos de Oliveira e Bragança');
		//mostra o nome do dono da conta;
		echo "Nome do dono da conta: ".$cliente1->getDono().'<br>';
		//mostra o saldo da conta;
		echo "Saldo da conta: R$ ".$cliente1->getSaldo().'<br>';
		//mostra o status da conta;
		echo "Status da conta: ".$cliente1->getStatus().'<br>';
		//deposita dinheiro na conta;
		$cliente1->depositar(100);
		//mostra o novo saldo da conta;
		echo "Saldo da conta: R$ ".$cliente1->getSaldo().'<br>';
		//tentando fecha a conta com dinheiro nela;
		$cliente1->fecharConta();
		//sacando quase tudo;
		$cliente1->sacar(645);
		//mostrando o novo valor após o saque;
		echo "Saldo da conta: R$ ".$cliente1->getSaldo().'<br>';
		//cobrando o valor mensal;
		$cliente1->pagarMensal();
		//mostrando o novo valor após o pagamento;
		echo "Saldo da conta após pagamento mensal: R$ ".$cliente1->getSaldo().'<br>';
		//depositando para o saldo ficar zerado;
		$cliente1->depositar(15);
		//mostrando o valor zerado agora...;
		echo "Saldo da conta após pagamento: R$ ".$cliente1->getSaldo().'<br>';
		// fechando conta;
		$cliente1->fecharConta();
		//mostrando o objeto;
		print_r($cliente1);
		//reativando a conta
		?>
	</pre>
</body>
</html>