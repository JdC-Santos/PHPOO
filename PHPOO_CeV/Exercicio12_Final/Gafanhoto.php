<?php
	require_once 'Pessoa.php';
	class Gafanhoto extends Pessoa{
		private $login;
		private $totAssistido;
		//construct
		public function __construct($nm,$idd,$sx,$log){
			parent::__construct($nm,$idd,$sx);
			$this->setLogin($log);
			$this->totAssistido = 0;
		}
		//getters and setters
		public function getLogin(){
			return $this->login;
		}
		public function setLogin($l){
			$this->login = $l;
		}
		public function getTotAssistido(){
			return $this->totAssistido;
		}
		public function setTotAssistido(){
			$this->totAssistido++;
			$this->ganharExp(1);
		}
		public function viuMaisUm(){
			$this->setTotAssistido();
		}
	}