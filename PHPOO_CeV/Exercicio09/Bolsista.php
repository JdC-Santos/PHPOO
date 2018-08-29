<?php
	require_once 'Aluno.php';
	final class Bolsista extends Aluno{
		private $bolsa;

		public function getBolsa(){
			return $this->bolsa;
		}
		public function setBolsa($b){
			$this->bolsa = $b;
		}

		public final function renovarBolsa(){
			echo "<p>Bolsa renovada</p>";
		}
		public final function pagarMensal(){
			echo "<p>{$this->nome} é bolsista, entao paga com desconto</p>";
		}
	}