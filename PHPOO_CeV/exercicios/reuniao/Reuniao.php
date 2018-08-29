<?php 
	class Reuniao{
		var $dia;
		var $hora;
		var $local;
		var $titulo;
		var $situacao;

		function AlterarHorario($hr){
			$this->hora = $hr;
		}
		function AlterarDia($dia){
			$this->dia = $dia;
		}
		function AlterarLocal($local){
			$this->local = $local;
		}
		function AlterarTitulo($titulo){
			$this->titulo = $titulo;
		}
		function Situacao($situacao){
			$this->situacao = $situacao;
		}
	}
?>