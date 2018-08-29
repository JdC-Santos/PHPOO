<?php
	class Caneta{
		var $modelo;
		var $cor;
		var $ponta;
		var $carga;
		var $tampada;

		function rabiscar(){
			if($this->tampada == true)
				echo "Nao posso rabiscar, esta tampada<br>";
			else
				echo "Rabisquei<br>";
		}
		function tampar(){
			$this->tampada = true;
			echo "Tampei a caneta<br>";
		}
		function destampar(){
			$this->tampada = false;
			echo "Destampei a caneta<br>";
		}
	}