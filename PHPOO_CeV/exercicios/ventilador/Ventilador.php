<?php 
	class Ventilador{
		var $cor = 'Branco';
		var $forca = 0;
		var $rotacao =false;

		//metodo para ligar ou desligar o ventilador
		function Forca($f){
			$this->forca = $f;
		}
		//funcao para ativar a rotacao
		// function LigaRotacao(){
		// 	$this->rotacao = true;
		// }
		// //funcao para desativar a rotacao
		// function DesligaRotacao(){
		// 	$this->rotacao = false;
		// }
		/*================
		teste de metodo
		================*/
		//ligar e desligar no mesmo metodo
		function Rotacao($r){
			$this->rotacao = $r;
		}
	}
?>