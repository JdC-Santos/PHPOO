<?php 
	include_once 'Medico.php';

	class Anestesista extends Medico implements InterfaceMedico {

		/**
		 * Antes que me equeça isso aqui é polimorfismo.
		 * O metodo procedimento foi definido na classe Medico.
		 * Cada classe que seja filha(herde) de Medico precisa implementar esse metodo.
		 * Para cada classe que implementa esse metodo, o algoritmo dentro dele 
		 * é diferente, ou seja, o mesmo metodo faz coisas diferentes
		 * baseado na classe que ele está sendo implementado.
		 *
		 * Obs: O PHP até o momento que eu estou estudando isso nao suporta sobrecarga!
		 */
		public function procedimento(){
			echo 'aplica a anestesia';
		}

		public function operar(){
			echo "o metodo de operar foi sobrescrito para se adequar a classe Anestesista";
		}

		public function examinar(){
			echo "A anestesia fez efeito, enfia a sonda!";
		}
	}