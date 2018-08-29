<?php
	require_once 'AcoesVideo.php';
	class video implements AcoesVideo{
		private $titulo;
		private $avaliacao;
		private $views;
		private $curtidas;
		private $reproduzindo;
		//construct
		public function __construct($t){
			$this->setTitulo($t);
			$this->setAvaliacao(0);
			$this->setViews(0);
			$this->setCurtidas(0);
			$this->setReproduzindo(false);
		}
		//getters and setters
		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo($t){
			$this->titulo = $t;
		}
		public function getAvaliacao(){
			return $this->avaliacao;
		}
		public function setAvaliacao($a){
			$this->avaliacao += $a;
		}
		public function getViews(){
			return $this->views;
		}
		public function setViews($v){
			$this->views = $v;
		}
		public function getCurtidas(){
			return $this->curtidas;
		}
		public function setCurtidas($c){
			$this->curtidas = $c;
		}
		public function getReproduzindo(){
			return $this->reproduzindo;
		}
		public function setReproduzindo($r){
			$this->reproduzindo = $r;
		}
		//class methods
		public function like(){
			$this->setCurtidas($this->getCurtidas()+1);
		}
		public function pause(){
			$this->setReproduzindo(false);
		}
		public function play(){
			$this->setReproduzindo(true);
		}
	}