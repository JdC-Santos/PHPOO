<?php
	require_once 'Video.php';
	require_once 'Gafanhoto.php';

	class Visualizacao{
		private $espectador;
		private $filme;
		//construct
		public function __construct($espec,$video){
			$this->setEspec($espec);
			$this->setFilme($video);
			$this->filme->setViews($this->filme->getViews()+1);
			$this->espectador->viuMaisUm();
		}
		//getters and setters
		public function getEspec(){
			return $this->espectador;
		}
		public function setEspec($e){
			$this->espectador = $e;
		}
		public function getFilme(){
			return $this->filme;
		}
		public function setFilme($f){
			$this->filme = $f;
		}
		//class methods
		public function avaliar(){
			$this->filme->setAvaliacao(5);
		}
		public function avaliarNota($n){
			$this->filme->setAvaliacao($n);
		}
		public function avaliarPorc($p){
			if($p <20){
				$nt = 3;
			}else if($p <=50){
				$nt = 5;
			}else if($p <90){
				$nt = 8;
			}else{
				$nt =10;
			}
			$this->filme->setAvaliacao($nt);
		}
	}