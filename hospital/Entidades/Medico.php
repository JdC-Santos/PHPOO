<?php 
	include_once 'Pessoa.php';
	include_once 'Especialidade.php';

	class Medico extends Pessoa {

		/**
		 * @var string
		 */
		private $CRM;
		
		/**
		 * Este atributo vai receber um array de objs Especialidade;
		 * @var array[Especialidade]
		 */
		private $especialidade = [];
		
		/**
		 * @var double
		 */
		private $vlHora;
		
		/**
		 * @method construtor
		 */
		public function Medico(){
			// parent::Pessoa();
		}

		/**
		 * @method Getters e Setters
		 */
		public function getCRM(){ return $this->CRM; }
		public function setCRM($crm){ $this->CRM = $crm; }
		public function getEspecialidades(){ return $this->especialidades; }
		public function setEspecialidade(Especialidade $e){ $this->especialidades[] = $e; }
		public function getVlHora(){ return $this->vlHora; }
		public function setVlHora(double $vlHora){ $this->vlHora = $vlHora; }
	}