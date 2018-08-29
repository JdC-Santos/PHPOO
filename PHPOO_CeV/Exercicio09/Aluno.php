<?php
	//herança para diferença
	require_once 'Pessoa.php';
	class Aluno extends Pessoa{
		private $matr;
		private $curso;
		//construct
		public function __construct(){

		}
		//getters and setters
		public function getMatr(){
			return $this->matr;
		}
		public function setMatr($m){
			$this->matr = $m;
		}
		public function getCurso(){
			return $this->curso;
		}
		public function setCurso($c){
			$this->curso = $c;
		}
		public function pagarMensal(){
			echo "<p>Pagando a mensalidade do aluno $this->nome</p>";
		}
	}