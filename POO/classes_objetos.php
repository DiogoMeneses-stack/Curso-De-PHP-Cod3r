<div class="titulo">Primeira Classe</div>

<?php
class Cliente{
       // atributo
       public $nome = 'Anônimo';
       public $idade = 18;

       public function Apresentar(){
            echo $this->nome . " " .$this->idade;


       }
}

$cliente1 = new Cliente();
$cliente1->nome = "Diogo";
$cliente1->idade = 28;
$cliente1 ->Apresentar();