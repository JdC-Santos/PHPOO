<?php
	require_once('Pessoa.php');
	class Professor extends Pessoa{
		private $especialidade;
		private $salario;
		//construct
		public function __construct(){

		}
		//getters and setters
		public function getEspecialidade(){
			return $this->especialidade;
		}
		public function setEspecialidade($e){
			$this->especialidade = $e;
		}
		public function getSalario(){
			return $this->salario;
		}
		public function setSalario($s){
			$this->salario = $s;
		}
		//metodos da classe
		public function receberAum($al){
			$this->setSalario($this->getSalario() + $al);
		}
	}