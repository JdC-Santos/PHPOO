<?php
	require_once 'Animal.php';
	class Mamifero extends Animal{
		private $corPelo;

		//getters and setters
		public function getCorPelo(){
			return $this->corPelo;
		}
		public function setCorPelo($cp){
			$this->corPelo = $cp;
		}

		public function locomover(){
			echo "Correndo<br>";
		}
		public function alimentar(){
			echo "Mamando";
		}
		public function emitirSom(){
			echo "OOOOOOOOOOOOOOOOOOOOOH";
		}
	}