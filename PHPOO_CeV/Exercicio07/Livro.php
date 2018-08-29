<?php
	require_once('Publicacao.php');
	require_once('Pessoa.php');
	class Livro implements Publicacao{
		private $titulo;
		private $autor;
		private $totPaginas;
		private $pagAtual;
		private $aberto;
		private $leitor;
		//construtor
		public function __construct($t,$a,$tp,$le){
			$this->setTitulo($t);
			$this->setAutor($a);
			$this->setTotPaginas($tp);
			$this->setPagAtual(0);
			$this->setAberto(false);
			$this->setLeitor($le);
		}
		//getters e setters
		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo($t){
			$this->titulo = $t;
		}
		public function getAutor(){
			return $this->autor;
		}
		public function setAutor($a){
			$this->autor = $a;
		}
		public function getTotPaginas(){
			return $this->totPaginas;
		}
		public function setTotPaginas($tp){
			$this->totPaginas = $tp;
		}
		public function getPagAtual(){
			return $this->pagAtual;
		}
		public function setPagAtual($pa){
			$this->pagAtual = $pa;
		}
		public function getAberto(){
			return $this->aberto;
		}
		public function setAberto($a){
			$this->aberto = $a;
		}
		public function getLeitor(){
			return $this->leitor;
		}
		public function setLeitor($l){
			$this->leitor = $l;
		}
		//metodos especiais
		public function detalhes(){
			if($this->getAberto()){
				$ab =  "sim";
			}else{
				$ab = "não";
			}
			echo "{$this->getLeitor()->getNome()} de {$this->getLeitor()->getIdade()} anos do sexo {$this->getLeitor()->getSexo()}<br>";
			echo 'está lendo "'.$this->getTitulo().'" do autor '.$this->getAutor().'<br>';
			echo "que tem {$this->getTotPaginas()} páginas e está na página {$this->getPagAtual()}<br>";
		}
		public function abrir(){
			$this->setAberto(true);
		}
		public function fechar(){
			$this->setAberto(false);
		}
		public function folhear(){
			if($this->getPagAtual()+1 > $this->getTotPaginas()){
				$this->setPagAtual($this->getTotPaginas());
				echo "Voce está na Capa do Livro!<br>";
			}else{
				$this->setPagAtual($this->getPagAtual()+1);
				echo "Voce está na página {$this->getPagAtual()} do Livro!<br>";
			}
		}
		public function avancarPag($p){
			$this->setPagAtual($this->getPagAtual()+$p);
			if($this->getPagAtual() >= $this->getTotPaginas()){
				$this->setPagAtual($this->getTotPaginas()+1);
				$this->setAberto(false);
				echo "Voce está na Capa do Livro!<br>";
			}else{
				$this->setAberto(true);
				echo "Voce está na página {$this->getPagAtual()} do Livro!<br>";
			}
		}
		public function voltarPag($p){
			$this->setPagAtual($this->getPagAtual()-$p);
			if($this->getPagAtual() <= 1){
				$this->setPagAtual(0);
				$this->setAberto(false);
				echo "Voce está na Capa do Livro!<br>";
			}else{
				$this->setAberto(true);
				echo "Voce está na página {$this->getPagAtual()} do Livro!";
			}
		}
	}