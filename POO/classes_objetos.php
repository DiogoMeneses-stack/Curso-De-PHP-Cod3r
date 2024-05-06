<div class="titulo">Primeira Classe</div>

<?php
class Cliente{
       // atributo
       public $nome = 'Anônimo';
       public $idade = 18;

       public function Apresentar(){
            return $this->nome . " " .$this->idade;


       }
}

$cliente1 = new Cliente();
echo $cliente1->nome = "Diogo" ." ";
echo $cliente1->idade = 28 . "<br>";
echo $cliente1 ->Apresentar();