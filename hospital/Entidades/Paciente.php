<?php 
	include_once 'Pessoa.php';
	include_once 'Plano.php';

	class Paciente extends Pessoa {
		/**
		 * cpf do paciente.
		 * @var string 
		 */
		private $CPF;
		/**
		 * 
		 * @var Plano
		 */
		private $plano;

		public function Paciente(){
			// parent::Pessoa();
			$this->plano = new Plano;
		}
		/**
		 *	@method Getters e Setters
		 */
		public function getCPF(){ return $this->CPF; }
		public function setCPF(int $cpf){ $this->CPF = $cpf; }
		public function getPlano(){ return $this->plano; }
		public function setPlano(Plano $plano){ $this->plano = $plano; }

		/**
		 * @param Paciente $paciente paciente a ser cadastrado
		 * @return bool
		 */
		public function cadastrar(Paciente $paciente){

		}

		/**
		 * @param Paciente $paciente paciente a ser alterado
		 * @return bool
		 */
		public function alterar(Paciente $paciente){

		}

		/**
		 * @param Paciente $paciente paciente a ser excluido
		 * @return bool
		 */
		public function excluir(Paciente $paciente){

		}

		/**
		 * @param string $cpf procura por paciente com esse cpf
		 * @return Paciente
		 */
		public function consultaUm($cpf){

		}

		/**
		 * Obs: O PHP nao tem sobrecarga (até a versão q eu estou usando ao menos)
		 * por isso nao é possivel escrever o mesmo nome de metodo mais de 1x
		 *
		 * @param string $nome busca pacientes pelo nome
		 * @param string $dtNascimento busca pacientes pela data de nascimento
		 * @return array[Paciente]
		 */
		public function consultaLista($nome, $dtNasc){

		}
	}