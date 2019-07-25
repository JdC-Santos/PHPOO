<?php 
	include_once 'Paciente.php';
	include_once 'Medico.php';
	include_once 'Sala.php';

	class Procedimento {

		/**
		 * @var Paciente
		 */
		private $paciente;

		/**
		 * @var array[Medico]
		 */
		private $medicos = [];

		/**
		 * @var string
		 */
		private $data;

		/**
		 * @var Sala
		 */
		private $sala;

		/**
		 * @var string
		 */
		private $observacoes;

		/**
		 * @var double
		 */
		private $valor;

		/**
		 * @var string
		 */
		private $tempoDuracao;

		public function getPaciente(){ return $this->paciente; }
		public function setPaciente(Paciente $p){ $this->paciente = $p; }
		public function getMedicos(){ return $this->medicos; }
		public function setMedicos(Medico $m){ $this->medicos[] = $m; }
		public function getData(){ return $this->data; }
		public function setData($dt){ $this->data = $dt; }
		public function getSala(){ return $this->sala; }
		public function setSala(Sala $sala){ $this->sala = $sala; }
		public function getObservacoes(){ return $this->observacoes; }
		public function setObservacoes($obs){ $this->observacoes = $obs; }
		public function getValor(){ return $this->valor; }
		public function setValor(double $vl){ $this->valor = $vl; }
		public function getTempoDuracao(){ return $this->tempoDuracao; }
		public function setTempoDuracao($td){ $this->tempoDuracao = $td; }
	}