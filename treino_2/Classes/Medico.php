<?php 
	include_once 'User.php';
	/**
	 * Esta classe vai servir de base para todos os tipos de médicos
	 */
	abstract class Medico extends User {

		private $matricula;
		private $salario;

		/**
		 * Não vou comentar sobre esses getters e setters, ja uso eles de mais...
		 * espera... isso aqui não é um comentario?
		 */
		public function getMatricula(){ return $this->matricula; }
		public function serMatricula($matricula ){ $this->matricula = $matricula; }
		
		public function getSalario(){ return $this->salario; }
		public function setSalario($salario){ $this->salario = $salario; }

		/**
		 * @method metodo que deve ser escrito em cada tipo de médico.
		 * obs: eu AINDA nao sei comentar direito, nem usar direito esses @algumacoisa
		 * mas sao legais :)
		 */
		abstract public function procedimento();
	}