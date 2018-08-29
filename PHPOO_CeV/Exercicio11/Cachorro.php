<?php
	require_once 'Mamifero.php';
	class Cachorro extends Mamifero{
		public function reagirFrase($frase){
			if($frase == "da pata"){
				echo "au";
			}else{
				echo "grrrr";
			}
		}
		public function reagirHora($hora){
			if($hora <=12){
				echo "abandou rabo";
			}else if($hora >= 18){
				echo "ignorou";
			}else{
				echo "au";
			}
		}
		public function reagirDono($dono){
			if($dono){
				echo "au";
			}else{
				echo "Grrr";
			}
		}
		public function reagirIdade($idade){
			if($idade == 11){
				echo "ignorou";
			}else if($idade >6){
				echo "latiu";
			}else{
				echo "latiu e abanou o rabo";
			}
		}
	}