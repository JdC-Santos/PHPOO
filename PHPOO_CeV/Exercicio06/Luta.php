<?php
	require_once('Lutador.php');
	class Luta{
		private $desafiado;
		private $desafiante;
		private $rounds;
		private $aprovada;
		//metodo construtor
		//metodos getters e setters
		public function getDesafiado(){
			return $this->desafiado;
		}
		public function setDesafiado($d){
			$this->desafiado = $d;
		}
		public function getDesafiante(){
			return $this->desafiante;
		}
		public function setDesafiante($d){
			$this->desafiante = $d;
		}
		public function getRounds(){
			return $this->rounds;
		}
		public function setRounds($r){
			$this->rounds = $r;
		}
		public function getAprovada(){
			return $this->aprovada;
		}
		public function setAprovada($a){
			$this->aprovada =$a;
		}
		//metodos principais
		public function marcarLuta($l1,$l2){
			if(($l1->getCategoria() != "Inválido")
				&& ($l2->getCategoria() != "Inválido")
				&& ($l1->getCategoria() == $l2->getCategoria())	
				&& ($l1 != $l2)){
				$this->setAprovada(1);
				$this->setDesafiante($l1);
				$this->setDesafiado($l2);
			}else{
				$this->setAprovada(0);
				$this->setDesafiante(null);
				$this->setDesafiado(null);
			}
		}
		public function lutar(){
			if($this->getAprovada()){
				$this->desafiado->apresentar();
				$this->desafiante->apresentar();

				$res = rand(0,2);
				$rounds = rand(1,5);
				$this->setRounds($rounds);
				if($res == 0){//empate
					echo "Empatou";
					$this->desafiado->empatarLuta();
					$this->desafiante->empatarLuta();
				}else if($res == 1){//desafiado
					echo "{$this->desafiado->getNome()} venceu {$this->desafiante->getNome()} em {$this->rounds} rounds";
					$this->desafiado->ganharLuta();
					$this->desafiante->perderLuta();
				}else{//desafiante
					echo "{$this->desafiante->getNome()} venceu {$this->desafiado->getNome()} em {$this->rounds} rounds";
					$this->desafiado->perderLuta();
					$this->desafiante->ganharLuta();
				}
			}else{
				echo "A Luta não pode acontecer";
			}
		}
	}
