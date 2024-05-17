<div class="titulo">Herança</div>

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

$usuario = new Usuario('Diogo Meneses', 22, 'diogo_meneses');
$usuario->apresentar();
unset($usuario);