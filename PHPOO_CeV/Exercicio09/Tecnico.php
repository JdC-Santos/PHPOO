<?php
	require_once 'Aluno.php';
	final class Tecnico extends Aluno{
		private $regPro;

		public function getRegPro(){
			return $this->regPro;
		}
		public function setRegPro($rp){
			$this->regPro =$rp; 
		}

		public final function praticar(){
			echo"<p>{$this->nome} está praticando!</p>";
		}
	}