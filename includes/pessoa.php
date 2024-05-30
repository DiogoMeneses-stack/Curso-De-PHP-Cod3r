<?php

class Pessoa
{
    // heranças em php
    public $nome;
    public $idade;

    function __construct($novoNome, $idade)
    {
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo 'Pessoa Criada! <br>';
    }

    function __destruct()
    {
        echo 'falou!!!';
    }

    public function apresentar()
    {
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}
