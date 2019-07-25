<?php 
	include_once 'Paciente.php';
	include_once 'Medico.php';

	class Consulta {

		/**
		 * @var Paciente
		 */
		private $paciente;

		/**
		 * @var Medico
		 */
		private $medico;

		/**
		 * @var string
		 */
		private $data;

		/**
		 * @var string
		 */
		private $receituario;

		/**
		 * @var double
		 */
		private $valor;

		public function getPaciente(){ return $this->paciente; }
		public function setPaciente(Paciente $p){ $this->paciente = $p; }
		public function getMedico(){ return $this->medico; }
		public function setMedico(Medico $m){ $this->medico = $m; }
		public function getData(){ return $this->data; }
		public function setData($dt){ $this->data = $dt; }
		public function getReceiturario(){ return $this->receituario; }
		public function setReceiturario($r){ $this->receituario = $r; }
		public function getValor(){ return $this->valor; }
		public function setValor(double $vl){ $this->valor = $vl; }
	} 