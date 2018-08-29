<?php
	require_once 'Animal.php';
	class Ave extends Animal{
		private $corPena;

		//getters and setters
		public function getCorPena(){
			return $this->corPena;
		}
		public function setCorPena($cp){
			$this->corPena = $cp;
		}
		public function locomover(){
			echo "voando";
		}
		public function alimentar(){
			echo "comendo migalhas";
		}
		public function emitirSom(){
			echo "PRUUUU";
		}
		public function fazerNinho(){
			echo "fazendo ninho";
		}
	}