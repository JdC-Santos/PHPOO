<?php
	class Lutador{
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitorias;
		private $derrotas;
		private $empates;
		//metodo construtor
		public function __construct($nm,$nac,$ida,$alt,$kg,$vit,$der,$emp){
			$this->setNome($nm);
			$this->setNacionalidade($nac);
			$this->setIdade($ida);
			$this->setAltura($alt);
			$this->setPeso($kg);
			$this->setVitorias($vit);
			$this->setDerrotas($der);
			$this->setEmpates($emp);
		}
		//metodos getters e setters
		public function getNome(){
			return $this->nome;
		}
		public function setNome($n){
			$this->nome = $n;
		}
		public function getNacionalidade(){
			return $this->nacionalidade;
		}
		public function setNacionalidade($n){
			$this->nacionalidade = $n;
		}
		public function getIdade(){
			return $this->idade;
		}
		public function setIdade($i){
			$this->idade = $i;
		}
		public function getAltura(){
			return $this->altura;
		}
		public function setAltura($a){
			$this->altura = $a;
		}
		public function getPeso(){
			return $this->peso;
		}
		public function setPeso($p){
			$this->peso = $p;
			$this->setCategoria();
		}
		public function getCategoria(){
			return $this->categoria;
		}
		private function setCategoria(){
			if($this->getPeso() < 52.2 ){
				$this->categoria = "Inválido";
			}else if($this->getPeso() < 70.4){
				$this->categoria = "Leve";
			}else if($this->getPeso() < 84){
				$this->categoria = "Médio";
			}else if($this->getPeso() < 120.3){
				$this->categoria = "Pesado";
			}else{
				$this->categoria = "Inválido";
			}
		}
		public function getVitorias(){
			return $this->vitorias;
		}
		public function setVitorias($v){
			$this->vitorias = $v;
		}
		public function getDerrotas(){
			return $this->derrotas;
		}
		public function setDerrotas($d){
			$this->derrotas = $d;
		}
		public function getEmpates(){
			return $this->empates;
		}
		public function setEmpates($e){
			$this->empates = $e;
		}
		//metodos principais
		public function apresentar(){
			echo 	"======={$this->getNome()}=======<br> 
					Pais: {$this->getNacionalidade()}<br>
					Idade: {$this->getIdade()}<br>
					Altura:{$this->getAltura()}<br>
					peso: {$this->getPeso()}<br>
					Categoria: {$this->getCategoria()}<br>
					Vitórias: {$this->getVitorias()}<br>
					Derrotas: {$this->getDerrotas()}<br>
					Empates: {$this->getEmpates()}<br>
					====================<br>";
		}
		public function status(){
			echo 	"Nome: {$this->getNome()}<br> 
					Categoria: {$this->getCategoria()}<br>
					peso: {$this->getPeso()}<br>
					Vitórias: {$this->getVitorias()}<br>
					Derrotas: {$this->getDerrotas()}<br>
					Empates: {$this->getEmpates()}<br>";
		}
		public function ganharLuta(){
			$this->setVitorias($this->getVitorias() +1);
		}
		public function perderLuta(){
			$this->setDerrotas($this->getDerrotas()+1);
		}
		public function empatarLuta(){
			$this->setEmpates($this->getEmpates()+1);
		}
	}
