<?php 
	include_once 'User.php';
	/**
	 * Esta classe vai servir de base para todos os tipos de médicos
	 */
	abstract class Medico extends User {

		private $matricula;
		private $salario;
		/**
		 * Aqui temos associação estrutural, a classe Medico está associada com a classe Endereco;
		 * Este tipo de associação é chamado de composição.
		 * pois um endereço(parte) compoe um médico (todo) e apenas UM
		 * este endereço nao deve existir sem se conectar a um medico
		 * e nao deve existir em mais de 1 médico.
		 */
		private $endereco;

		/**
		 * Não vou comentar sobre esses getters e setters, ja uso eles de mais...
		 * espera... isso aqui não é um comentario?
		 */
		public function getMatricula(){ return $this->matricula; }
		public function setMatricula($matricula ){ $this->matricula = $matricula; }
		
		public function getSalario(){ return $this->salario; }
		public function setSalario($salario){ $this->salario = $salario; }

		public function getEndereco(){ return $this->endereco; }
		public function setEnderco(Endereco $endereco){ $this->endereco = $endereco; }

		/**
		 * @method metodo que deve ser escrito em cada tipo de médico.
		 * obs: eu AINDA nao sei comentar direito, nem usar direito esses @algumacoisa
		 * mas sao legais :)
		 */
		abstract public function procedimento();

		public function operar(){
			echo "metodo da classe Medico: um metodo de operar generico";
		}

		protected function teste(){
			return 'retorno da classe Medico';
		}
	}