<?php
	class ContaBanco{
		//atributos
		public $numConta;
		protected $tipo;//cc > 50 ou cp >150
		private $dono;
		private $saldo; 
		private $status;//aberta = v
		//metodos
		public function __construct(){
			$this->setSaldo(0);
			$this->setStatus(0);
		}
		public function getNumConta(){
			return $this->numConta;
		}
		public function setNumConta($nc){
			$this->numConta = $nc;
		}
		public function getTipo(){
			return $this->tipo;
		}
		public function setTipo($t){
			if($t == 'cc' || $t == 'cp'){
				$this->tipo = $t;
			}else{
				echo "Tipo de conta invalida!<br>";
			}
		}
		public function getDono(){
			return $this->dono;
		}
		public function setDono($d){
			$this->dono = $d;
		}
		public function getSaldo(){
			return $this->saldo;
		}
		protected function setSaldo($vl){
			$this->saldo = $vl;
		}
		public function getStatus(){
			return $this->status;
		}
		private function setStatus($st){
			$this->status = $st;
		}
		public function abrirConta($dono,$tipo,$vl){
			//verifica se é uma das opcoes aceitas
			if($tipo == 'cc'){
				$this->setSaldo($this->getSaldo() +$vl+50);
				$this->setStatus(1);
				$this->setTipo($tipo);
				$this->setDono($dono);
				echo "A conta foi aberta<br>";
			}else if($tipo == 'cp'){
				$this->setSaldo($this->getSaldo()+$vl+150);
				$this->setStatus(1);
				$this->setDono($dono);
				$this->setTipo($tipo);
				echo "A conta foi aberta<br>";
			}else{
				echo "tipo de conta invalida";
			}
		}
		public function fecharConta(){
			if($this->getSaldo() > 0){
				echo "Saque todo o seu dinheiro antes de fechar a conta!<br>";
			}else if($this->getSaldo() <0){
				echo "Pague o valor em debito antes de fechar a conta!<br>";
			}else{
				$this->setStatus(0);
				echo "Conta fechada com sucesso!<br>";
			}
		}
		public function depositar($vl){
			if($this->getStatus() == 1){
				$this->setSaldo($this->getSaldo() + $vl);
				echo "Deposito de R$ {$vl} reais na conta de {$this->dono}!<br>"; 
			}else{
				echo "A conta nao está aberta<br>";
			}
		}
		public function sacar($vl){
			if($this->getStatus() == 1 ){
				if($this->getSaldo() >= $vl){
					$this->setSaldo($this->getSaldo() - $vl);
					echo "Saque efetuado com sucesso!<br>";
				}else{
					echo "Voce nao possui Saldo suficiente para este saque!<br>";
				}
			}else{
				echo "A conta nao está ativa!<br>";
			}
		}
		public function pagarMensal(){
			if($this->tipo == 'cc'){
				$this->setSaldo($this->getSaldo() -12);
			}else{
				$this->setSaldo($this->getSaldo()-20);
			}
		}
	}