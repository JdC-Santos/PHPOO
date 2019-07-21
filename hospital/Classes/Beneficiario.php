<?php 
	include_once 'User.php';

	class Beneficiario extends User {
		private $nome;
		private $dtNascimento;
		private $tipoBeneficio;
		private $dependentes = []; //obj do tipo beneficiario

		public function getDepedentes(){return $this->dependentes; }
		public function setDependentes(Beneficiario $dependente){
			//insere o novo dependente dentro do array
			$this->dependentes[] = $dependente;
		}
	}