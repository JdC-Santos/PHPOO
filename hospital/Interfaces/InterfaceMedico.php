<?php 
	/**
	 *	A interface é um contrato que obriga as classes que a implementam
	 *  implementar os metodos que ela diz que tem que ter.
	 */
	interface InterfaceMedico {

		public function procedimento();
		public function examinar();
	}