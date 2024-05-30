<?php
    class Usuario extends Pessoa
    { // Sub classe extende Super-Classe Genérica
        public $login;
    
        function __construct($nome, $idade, $login)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->login = $login;
    
            echo 'Usuario Criado:<br>';
        }
        function __destruct()
        {
            echo 'Fechou !!!<br>';
        }
    
        public function apresentar()
        {
            //echo "{$this->nome}, {$this->idade} anos<br>";
            parent::apresentar();
            echo "@{$this->login}<br>";
        }
    }