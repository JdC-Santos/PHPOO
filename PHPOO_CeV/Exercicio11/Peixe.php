<?php
	require_once 'Animal.php';
	class Peixe extends Animal{
		private $corEscama;

		//getters and setters
		public function getCorEscama(){
			return $this->corEscama;
		}
		public function setCorEscama($ce){
			$this->corEscama = $ce;
		}
		public function locomover(){
			echo "nadando";
		}
		public function alimentar(){
			echo "Comendo substancias";
		}
		public function emitirSom(){
			echo "Continue  a nadar, continue a nadar...";
		}
		public function soltarBolha(){
			echo "soltou bolhas";
		}
	}