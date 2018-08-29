<?php
    class Banco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function AbrirConta(){

        }
        public function fecharConta(){

        }
        public function depositar(){

        }
        public function sacar(){

        }
        public function pagarMensal(){

        }
        //metodos especiais
        public function __construct(){

        }
        public function __get($item){
            return $this->$item;
        }
        public function __set($campo,$n){
            $this->$campo = $n;
        }

    }
?>