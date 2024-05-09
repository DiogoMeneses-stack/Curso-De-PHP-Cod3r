<div class="titulo">Construtor e Destrutor</div>

<?php
    /*

    Construtores
    https://www.php.net/manual/pt_BR/language.oop5.decon.php

    O PHP permite aos desenvolvedores declararem métodos construtores para as classes. Classes que tem um método construtor chamam o método a cada objeto recém criado, sendo apropriado para qualquer inicialização que o objeto necessite antes de ser utilizado.

    Nota: Construtores pais não são chamados implicitamente 
    se a classe filha define um construtor. 
    Para executar o construtor da classe pai, 
    uma chamada a parent::__construct() 
    dentro do construtor da classe filha é necessária. 
    Se a classe filha não definir um construtor, 
    será herdado da classe pai como um método normal 
    (se não foi declarado como privado).
        
    
    */

    class Pessoa{
        public $nome;
        public $idade;

        function __construct($novoNome, $idade = 18){
            echo 'Construtor invocado ! <br>';
            $this->nome = $novoNome;
            $this->idade = $idade;
        }

        function __destruct(){
            echo 'E morreu!';
        }

        public function apresentar(){
            echo "{$this->nome}, {$this->idade} anos.<br>";
        }
    }

    $pessoa = new Pessoa('Rebeca Maria', 40);
    $pessoa->apresentar();

    unset($pessoa); //sERÁ LIBERADO DA MEMÓRIA DESTRUTOR É CHAMADO

?>