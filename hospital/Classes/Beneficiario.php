<?php 
	include_once 'User.php';

	/**
	 * Aqui temos o tipó de associação UNÁRIA, pois só uma classe foi usada.
	 * A classe Beneficiario instancia um objeto de si mesma para 
	 * declarar os dependentes deste Beneficiario.
	 */
	class Beneficiario extends User {
		private $nome;
		private $dtNascimento;
		private $tipoBeneficio; // tituloar ou dependente
		private $dependentes = []; //obj do tipo beneficiario

		public function getDepedentes(){return $this->dependentes; }
		public function setDependentes(Beneficiario $dependente){
			//insere o novo dependente dentro do array
			$this->dependentes[] = $dependente;
		}
	}