<?php 
	class Banco{
		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;

		public function __construct(){
			$this->status = false;
			$this->saldo =0;
		}

		function __get($atr){
			return $this->$atr;
		}
		function __set($atr,$novo){
			$this->$atr = $novo;
		}
		public function abrirConta($nc,$tipo,$dono){
			if(($tipo != 'cc') && ($tipo != 'cp')){
				echo "ocorreu um erro!";
			}else{
				$this->status = true;
				if($tipo == 'cc'){
					$this->saldo = 50;
				}else if($tipo == 'cp'){
					$this->saldo = 150;	
				}
				$this->numConta = $nc;
				$this->tipo = $tipo;
				$this->dono =$dono;
				$this->status = true;
			}
		}
		public function fecharConta(){
			if(($this->saldo >0) || ($this->saldo < 0)){
				echo "voce nao pode ter dinheiro, nem estar devendo para fechar sua conta!<br>";
			}else{
				$this->status = 0;
				echo "conta fechada<br>";
			}
		}
		public function depositar($vl){
			if($this->status == false){
				echo "sua conta tem que estar ativa para poder depositar";
			}else{
				$this->saldo = $this->saldo+$vl;
				echo "deposito feito com sucesso!<br>";
				echo "Saldo:{$this->saldo}<br>";
			}
		}
		public function sacar($vl){
			if($this->status == false){
				echo "sua conta tem que estar ativa para poder sacar!";
			}else{
				if($this->saldo < $vl){
					echo "voce nao possui saldo para este saque!";
				}else{
					$this->saldo = $this->saldo -$vl;
					echo "Saque feito com sucesso!<br>";
					echo "Saldo:{$this->saldo}<br>";
					echo "Saque:{$vl}<br>";
				}
			}
		}
		public function pagarMensal(){
			if ($this->tipo == 'cc'){

				if($this->saldo < 12){
					echo "voce nao possui saldo para efetuar o pagamento<br>";
				}else{
					$this->saldo = $this->saldo - 12;
					echo "pagamento feito com sucesso!<br>";
					echo "Saldo:{$this->saldo}<br>";
				}

			}else{
				if($this->saldo < 20){
					echo "voce nao possui saldo para efetuar o pagamento<br>";
				}else{
					$this->saldo = $this->saldo - 20;
					echo "pagamento feito com sucesso!<br>";
					echo "Saldo:{$this->saldo}<br>";
				}
			}
		}

	}
?>