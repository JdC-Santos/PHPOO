<?php 
	
	class Endereco {

		/**
		 * @var string
		 */
		private $logradouro;

		/**
		 * @var int
		 */
		private $numero;

		/**
		 * @var string
		 */
		private $bairro;
		
		/**
		 * @var int
		 */
		private $CEP;

		/**
		 * @param string $log logradouro da pessoa
		 * @param int $nr numero da casa ou do apartamento
		 * @param string $bairro nome do bairro
		 * @param int $cep numero do CEP
		 */
		public function Endereco($log, $nr, $bairro, $cep){
			$this->setLogradouro($log);
			$this->setNumero($nr);
			$this->setBairro($bairro);
			$this->setCEP($cep);
		}

		public function getLogadouro(){ return $this->logradouro; }
		public function setLogradouro($log){ $this->logradouro = $log; }
		public function getNumero(){ return $this->numero; }
		public function setNumero(int $nr){ $this->numero = $nr; }
		public function getBairro(){ return $this->bairro; }
		public function setBairro($bairro){ $this->bairro = $bairro; }
		public function getCEP(){ return $this->CEP; }
		public function setCEP(int $cep){ $this->CEP = $cep; }
	}