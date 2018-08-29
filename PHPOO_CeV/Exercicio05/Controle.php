<?php
	require_once('Controlador.php');
	class Controle implements Controlador{
		//atributos
		private $volume;
		private $ligado;
		private $tocando;
		private $menu;
		private $mudo;

		//metodo construtor e metodos getters e setters
		public function __construct(){
			$this->setVolume(50);
			$this->setLigado(0);
			$this->setTocando(1);
			$this->setMudo(0);
			$this->setMenu(0);
		}
		public function getVolume(){
			return $this->volume;
		}
		public function setVolume($v){
			$this->volume = $v;
		}
		public function getLigado(){
			return $this->ligado;
		}
		public function setLigado($l){
			$this->ligado = $l;
		}
		public function getTocando(){
			return $this->tocando;
		}
		public function setTocando($t){
			$this->tocando = $t;
		}
		public function getMenu(){
			return $this->menu;
		}
		public function setMenu($m){
			$this->menu = $m;
		}
		public function getMudo(){
			return $this->mudo;
		}
		public function setMudo($m){
			$this->mudo = $m;
		}
		//metodos de interface
		public function ligaDesliga(){
			if($this->getLigado()){
				$this->setLigado(0);
			}else{
				$this->setLigado(1);
			}
		}
		public function abreMenu(){
			$this->setMenu(1);
			if($this->getLigado()){
				$estado = "Ligado";
			}else{
				$estado = "Desligado";
			}
			if($this->getTocando()){
				$toc = "Tocando";
			}else{
				$toc = "Pausado";
			}
			if($this->getMudo()){
				$mudo = "sim";
			}else{
				$mudo ="não";
			}
			return "==========MENU========<br>
					Estado: {$estado}<br>
					Volume: {$this->getVolume()}<br>
					Situacao: {$toc}<br>
					Mudo:{$mudo}<br>
					=======================<br>";
		}
		public function fechaMenu(){
			$this->setMenu(0);
			echo "Menu fechado<br>";
		}
		public function maisVolume(){
			if($this->getLigado()){
				$this->setVolume($this->getVolume()+1);
			}else{
				echo "TV desligada, nao posso aumentar o volume!<br>";
			}
			
		}
		public function menosVolume(){
			if ($this->getLigado()){
				$this->setVolume($this->getVolume()-1);
			}else{
				echo "TV desligada, nao posso abaixar o volume<br>";
			}
			
		}
		public function mudo(){
			if($this->getMudo()){
				$this->setMudo(0);
			}else{
				$this->setMudo(1);
			}
		}
		public function playPause(){
			if($this->getTocando()){
				$this->setTocando(0);
			}else{
				$this->setTocando(1);
			}
		}
	}