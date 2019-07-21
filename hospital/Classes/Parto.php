<?php 
	include_once 'Procedimento.php';
	include_once 'Cirurgiao.php';
	include_once 'Anestesista.php';
	include_once 'Sala.php';

	/**
	 * Aqui temos Associação multipla, pois temos um array de médicos
	 * E a Classe Sala para identificar em qual sala esta sendo operado o parto
	 * Sendo assim, esta Associação é do tipo MULTIPLA.
	 *
	 * Alem disso temos a cardinalidade, aqui seria algo como 1 para N (eu imagino)
	 * Já que temos 1 sala para vários médicos (como eu nao estudei isso afundo, 
	 * fica mais na parte da imaginação. assim que tiver um conhecimento melhor volto aqui
	 * para revisar esse trecho).
	 *
	 * E também tem a navegabilidate, ela pode ser unidirecional ou bidirecional.
	 * aqui é unidirecional pois a informação (sala/medico) só aparece na classe Parto
	 * Ou seja, se eu quiser saber futuramente quem está trabalhando neste parto
	 * eu precisarei verificar através dessa classe.
	 *
	 * Caso eu precisasse saber em qual operação o medico está, ou o que está sendo
	 * feito em determinada sala, eu colocaria um obj do tipo Procedimento neles.
	 * e a partir dai eu conseguiria saber qual procedimento está sendo feito na sala
	 * ou em qual procedimento determinado medico está.
	 * Esta seria uma navegabilidade BIDIRECIONAL.
	 */

	class Parto extends Procedimento{
		/**
		 * Essa associação é do tipo agregação, isso porque a sala nao é exclusiva do parto
		 * ela pode ser usada outro dia para outro procedimento.
		 */
		private $sala;
		private $medicos = [];//array Medicos trabalhando no parto

		public function getSala(){ return $this->sala; }
		/**
		 * Talvez seja associação comportamental, já que pelo que eu li
		 * quando se trata de metodos, é comportamental...
		 * mas eu nao achei outra forma de definir que este atributo (sala)
		 * deve ser do tipo Sala, e mesmo vindo via parametro o obj
		 * vai para um atributo da classe, então eu vou considerar que ele é
		 * associação estrutural do tipo agregação.
		 *
		 * Mas ele taḿbém se encaixa em associação comportamental do tipo dependencia
		 * pelo que eu entendi, já que o parametro precisa de um obj do tipo Sala para funcionar.
		 */
		public function setSala(Sala $sala){ $this->sala = $sala; }

		public function getMedicos(){ return $this->medicos; }
		public function setMeticos(Medico $medico){ $this->medicos[] = $medico; }
	}