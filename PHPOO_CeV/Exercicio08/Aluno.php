<?php
	require_once('Pessoa.php');
	class Aluno extends Pessoa{
		private $matricula;
		private $curso;
		//construct
		public function __construct(){
			
		}
		//getters and setters
		public function getMatricula(){
			return $this->matricula;
		}
		public function setMatricula($m){
			$this->matricula = $m;
		}
		public function getCurso(){
			return $this->curso;
		}
		public function setCurso($c){
			$this->curso = $c;
		}
		public function cancelarMatr(){
			$this->setMatricula(false);
		}
	}