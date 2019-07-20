<?php 
	/**
	 * Aparentemente nao preciso dar include na classe User, pois ela ja está
	 * sendo chamada dentro da classe Medico, que por sua vez está sendo
	 * chamada aqui!
	 */
	include_once 'Medico.php';
	include_once 'Interfaces/InterfaceMedico.php';
	/**
	 * O final significa que essa classe nao pode ter filhos, coitada :(
	 */
	final class Cirurgiao extends Medico implements InterfaceMedico{
		/**
		 * da pra usar __construct ou o nome da classe como metodo Construtor!
		 */
		public function Cirurgiao(){
			echo "E ai, vamo operar?";
		}
		/**
		 * Este metodo foi definido como abstrato na classe Medico.
		 * É obrigatório implementar ele nessa classe!
		 */
		public function procedimento(){
			echo "procede?";
		}
		/**
		 * Este metodo deve ser implementado ja que ele foi definido na InterfaceMedico
		 * E esta classe implementa a interface InterfaceMedico.
		 */
		public function examinar(){
			echo "Pelo que os exames mostram, voce está com frescurite aguda!";
		}
	}