<?php 
	class Spray{
		private $marca;
		private $cor;
		private $qtdTotal;
		private $qtdAtual;
		private $inflamavel;
		private $valor;
		private $tampada;

		public function __construct($m,$c,$qtdT,$qtdA,$infl,$vl){
			$this->marca = $m;
			$this->cor = $c;
			$this->qtdTotal = $qtdT;
			$this->qtdAtual = $qtdA;
			$this->inflamavel = $infl;
			$this->valor = $vl;
			$this->tampada = true;
		}

		public function __get($atr){
			echo $this->$atr.'<br>';
		}
		public function __set($atr,$novo){
			$this->$atr = $novo;
		}
		public function usarSpray(){
			
			if($this->tampada == true){
				echo 'Tire a tampa primeiro!<br>';
			}else{
				$this->qtdAtual = $this->qtdAtual - 2;
				echo "voce usou o Spray<br>";
			}
		}

	}
?>