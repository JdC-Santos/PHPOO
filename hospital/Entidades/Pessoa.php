<?php 
	/**
	 * Aqui damos inlude na Class Endereco pois vamos usar ela dentro da classe Pessoa
	 */
	include_once 'Endereco.php';
	/**
	 * Esta Classe servirá como base para todos os tipos de usurios do sistema
	 * Ela é abstrata pois nao deve ser instanciada
	 */
	abstract class Pessoa {
		/**
		 * Aqui colocamos os atributos que todas as pessoas(usuarios)
		 * do sistema precisaram ou terão
		 *
		 * @var string
		 */
		private $nome;
		/**
		 * @var string
		 */
		private $dtNascimento;
		/**
		 * Aqui eu defino um atributo do tipo Endereco.
		 * Essa é uma Associação Estrutural do tipo Composição, isso porque a parte(Endereco)
		 * COMPOE o todo (Pessoa), ou seja ela completa o todo.
		 * Obs: eu não encontrei uma forma melhor de fazer essa associação em PHP, mas imagino
		 * que esta forma nao esteja (tão) errada.
		 *
		 * @var Endereco
		 */
		private $endereco;

		public function Pessoa(){
			/**
			 * Ao instanciar a classe, instancia um obj do tipo Endereco 
			 * no atributo Endereco
			 */
			$this->endereco = new Endereco;
		}

		/**
		 * @method Getters e Setters
		 */

		public function getNome(){ return $this->nome; }
		public function setNome($nome){ $this->nome = $nome; }
		public function getDtNascimento(){ return $this->dtNascimento; }
		public function setDtNascimento($dtNasc){ $this->dtNascimento = $dtNasc; }
		public function getEndereco(){ return $this->Endereco; }
		public function setEndereco(Endereco $endereco){ $this->endereco = $endereco; }
	}