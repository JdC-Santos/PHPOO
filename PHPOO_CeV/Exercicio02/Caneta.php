<?php
	class Caneta{
		public $modelo;
		public $cor;
		private $ponta;
		protected $carga;
		protected $tampada;

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