<?php 
	include_once 'Pessoa.php';
	include_once 'Especialidade.php';

	class Medico extends Pessoa {

		/**
		 * @var int
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
		public function setCRM(int $crm){ $this->CRM = $crm; }
		public function getEspecialidades(){ return $this->especialidades; }
		public function setEspecialidade(Especialidade $e){ $this->especialidades[] = $e; }
		public function getVlHora(){ return $this->vlHora; }
		public function setVlHora(double $vlHora){ $this->vlHora = $vlHora; }

		/**
		 * @param Medico $medico medico a ser cadastrado
		 * @return bool
		 */
		public function cadastrar(Medico $medico){

		}

		/**
		 * @param Medico $medico medico a ser alterado
		 * @return bool
		 */
		public function alterar(Medico $medico){

		}

		/**
		 * @param Medico $medico medico a ser excluido
		 * @return bool
		 */
		public function excluir(Medico $medico){

		}

		/**
		 * @param int $CRM CRM a ser consultado
		 * @return Medico
		 */
		public function consultar(int $crm){

		}

		/**
		 * Como o PHP nao suporta sobrecarga, eu precisarei declarar 1 outro
		 * nome para este metodo.
		 * @param string $nome consulta medicos com este nome
		 * @return array[Medico]
		 */
		public function consultarLista($nome){

		}
	}