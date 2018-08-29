<?php
	class Caneta{
		//ATRIBUTOS
		public $modelo;
		private $cor;
		private $ponta;
		private $tampada;
		//MÉTODOS
		public function Caneta($m,$c,$p){//construtor
			$this->modelo = $m;
			$this->cor = $c;
			$this->ponta = $p;
			$this->tampar();
		}
		public function getModelo(){
			return $this->modelo;
		}
		public function setModelo($m){
			$this->modelo = $m;
		}
		public function getPonta(){
			return $this->ponta;
		}
		public function setPonta($p){
			$this->ponta = $p;
		}	
		public function rabiscar(){
			if($this->tampada == true)
				echo "Nao posso rabiscar, esta tampada<br>";
			else
				echo "Rabisquei<br>";
		}
		public function tampar(){
			$this->tampada = true;
			echo "Tampei a caneta<br>";
		}
		public function destampar(){
			$this->tampada = false;
			echo "Destampei a caneta<br>";
		}
	}