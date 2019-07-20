<?php 
	/** 
	 * A sala precisa usar a classe Medico, ja que irá guardar em um array
	 * todos os médicos que entrarem na operação que está sendo feita nela.
	 */
	include_once 'Cirurgiao.php';
	/**
	 * A sala não é um tipo de "usuario", por isso ela nao pode herdar User.
	 * Mas toda sala precisa de um conjunto de "coisas" ou ferramentas
	 * para que os médicos possam trabalhar, entao ela implementa uma interface.
	 */
	include_once 'Interfaces/InterfaceSala.php';

	class Sala implements InterfaceSala {
		private $medicos = []; // vai receber um array de médicos que estão nela
		private $ocupada; // verdadeiro ou falso, pode ou nao estar ocupada.
		private $tipoOperacao; //guarda o tipo de operação que está sendo feita nela.

		public function getMedicos(){ return $this->medicos; }
		/**
		 * A classe que eu inseri no index foi Cirurgiao, mas aqui eu estou
		 * falando que quero uma classe Medico, como Cirurgiao é do tipo Medico
		 * ou seja, Cirurgiao herda de Medico, é possivel enviar (instanciar) ele no lugar de Medico
		 * (ou qualquer outra classe que herde de Medico) isso se chama UPCAST.
		 *
		 * existe também o DOWNCAST, que é o contrario disso (vc pede o filho e instancia o pai)
		 * mas pelo que eu li, nao é muito bom usar ele, ja que pode ser necessario
		 * algum atributo ou metodo da classe filha que foi pedida e a classe pai pode nao ter
		 * entao provavelmente nem vou usar nesse treino...
		 */
		public function adicionaMedico(Medico $medico){
			$this->medicos[] = $medico;
		}

		public function removeMedico(Medico $medico){
			//cria um novo array.
			$arrMedicos = [];
			foreach($this->medicos as $indice => $obj){
				if($obj->getId() != $medico->getId()){
					//passa todos os medicos exceto o que eu quero excluir para o novo array
					$arrMedicos[] = $obj;
				}
			}
			//atualiza o array de medico da sala.
			$this->medicos = $arrMedicos;
		}
	}