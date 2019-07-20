<?php 

	interface InterfaceSala {
		/**
		 * Toda sala que implementar essa interface tem que poder
		 * adicionar e remover medicos
		 */
		public function adicionaMedico(Medico $medico);
		public function removeMedico(Medico $medico);
	}