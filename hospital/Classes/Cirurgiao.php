<?php 
	
	/**
	 * Aparentemente nao preciso dar include na classe User, pois ela ja está
	 * sendo chamada dentro da classe Medico, que por sua vez está sendo
	 * chamada aqui!
	 */
	include_once 'Medico.php';
	include_once 'Interfaces/InterfaceMedico.php';
	include_once 'Interfaces/Iteste.php';
	/**
	 * O final significa que essa classe nao pode ter filhos, coitada :(
	 */
	final class Cirurgiao extends Medico implements InterfaceMedico,Iteste{
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
		/**
		 * Este metodo está sobrescrevendo o operar da classe Medico.
		 * ele está chamando o metodo operar da classe Medico primeiro.
		 * ou seja, executando o codigo "original" e depois adicionando seu proprio tompero.
		 */
		public function operar(){
			// Lembrando que em C# seria base.operar(); 
			parent::operar();
			echo "<br>agora faz as coisas especificas dessa classe(Cirurgiao).";
		}
		/**
		 * Esse metodo foi declarado na Class Medico como protected.
		 * Foi alterada a visibilidade deste metodo
		 * Ele está chamando o metodo teste da classe pai, e adicionando mais coisa
		 * Após receber o retorno.
		 */
		public function teste(){
			$ret = parent::teste();
			echo $ret." | adicionando codigo após pegar o resultado do teste da class Medico";
		}
		/**
		 * Este metodo veio da segunda interface que esta classe está implementando
		 * foi implementada a segunda interface apenas para saber como funciona a
		 * implementação de 2 ou mais interfaces
		 */
		public function metodoTeste($p1,$p2){
			echo "<br>segunda interface implementada com sucesso!<br>";
		}
	}