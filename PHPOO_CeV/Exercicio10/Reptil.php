<?php
	require_once 'Animal.php';
	class Reptil extends Animal{
		private $corEscama;

		public function getCorEscama(){
			return $this->corEscama;
		}
		public function setCorEscama($ce){
			$this->corEscama = $ce;
		}

		public function locomover(){
			echo "rastejando...";
		}
		public function alimentar(){
			echo "Comendo vegetais";
		}
		public function emitirSom(){
			echo "UUUUUUUUUOOOOOOOOOOOOO";
		}
	}