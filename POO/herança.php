<div class="titulo">Herança</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade){
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct(){
        echo 'falou!!!';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}