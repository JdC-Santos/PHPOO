<?php
	abstract class Pessoa{
		protected $nome;
		protected $idade;
		protected $sexo;
		protected $exp;
		//construct
		public function __construct($nm,$idd,$sx){
			$this->nome = $nm;
			$this->idade = $idd;
			$this->sexo = $sx;
			$this->exp =0;
		}
		//getters and setters
		public function getNome(){
			return $this->nome;
		}
		public function setNome($n){
			$this->nome = $n;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function setIdade($i){
			$this->idade = $i;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setSexo($s){
			$this->sexo = $s;
		}
		public function getExp(){
			return $this->exp;
		}
		protected function setExp($e){
			$this->exp += $e;
		}
		//class methods
		protected function ganharExp($n){
			$this->setExp($n);
		}
	}