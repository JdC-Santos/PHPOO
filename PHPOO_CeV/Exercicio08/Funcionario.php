<?php
	require_once('Pessoa.php');
	class Funcionario extends Pessoa{
		private $setor;
		private $trabalhando;
		//construct
		public function __construct(){

		}
		//getters and setters
		public function getSetor(){
			return $this->setor;
		}
		public function setSetor($s){
			$this->setor = $s;
		}
		public function getTrabalhando(){
			return $this->trabalhando;
		}
		public function setTrabalhando($t){
			$this->trabalhando = $t;
		}
		//class methods
		public function mudarTrabalho(){
			if($this->getTrabalhando()){
				$this->setTrabalhando(false);
			}else{
				$this->setTrabalhando(true);
			}
		}
	}