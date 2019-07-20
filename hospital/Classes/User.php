<?php 
	/**
	 *	A Class User vai servir de base para as outras
	 */
	abstract class User {
		//atributos
		private $id;
		private $name;
		private $email;

		public function getId(){ return $this->id; }
		public function setId(int $id){ $this->id = $id; }
		
		public function getName(){ return $this->name; }
		public function setName($name){ $this->name = $name; }

		public function getEmail(){ return $this->email; }
		public function setEmail($email){ $this->email = $email; }
	}