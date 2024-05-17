<div class="titulo">Encapsulamento / Visibilidade</div>

<?php

class Pessoa{
    public $nome = 'Gustavo';
    protected $idade = 45;
    private $cpf = 1222222;

    public function mostrar(){
        echo "a)nome: {$this->nome}<br>";
        echo "b)idade: {$this->idade}<br>";
        echo "c)Cpf: {$this->cpf}<br>";
    }

    private function naoMostrar(){
        echo "Não mostrar";
    }
}

$usuario = new Pessoa();
$usuario->nome;
$usuario->mostrar();
//$usuario->naoMostrar();

class Sujeito extends Pessoa{
    public function mostrarDenovo(){
        parent :: mostrar();
        echo $this->nome;
    }
}

$sujeito = new Sujeito();
$sujeito->mostrarDenovo();