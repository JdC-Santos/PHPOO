<?php 
	class Plano {

		/**
		 * @var string	
		 */
		private $nome;

		/**
		 * @var double
		 */
		private $mensalidade;

		public function getNome(){ return $this->nome; }
		public function setNome($nome){ $this->nome = $nome; }
		public function getMensalidade(){ return $this->mensalidade; }
		public function setMensalidade(double $m){ $this->mensalidade = $m; }
	}