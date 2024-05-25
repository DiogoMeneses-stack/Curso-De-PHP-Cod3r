<div class="titulo">Métodos Mágicos</div>

<?php

class Pessoa
{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo 'Construindo ';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo 'E morreu';
    }

    public function __toString()
    {
        return "Olá meu nome é {$this->nome} tenho {$this->idade} anos.";
    }

    public function apresentar()
    {
        echo $this . "<br>";
    }

    public function __get($name) //__get() é utilizado para ler dados de propriedades inacessíveis (private ou protected) ou propriedades inexistentes.
    {
        echo $name;
        return 123;
    }

    public function __set($nome, $idade) // __set() é executado ao escrever dados em propriedades inacessíveis (private ou protected) ou propriedades inexistentes.
    {
        echo "Alterando atributo não declarado: {$nome}/{$idade}";
    }

    public function __call($name, $arguments) // __call() é disparado ao invocar métodos inacessíveis em um contexto de objeto.
    {
        $arguments = [1 ,2, 3, 4 ];
        print_r($arguments);
    }
}

$pessoa = new Pessoa('Jorge', 32);
$pessoa->apresentar();
echo '<br>' . $pessoa . '<br>';
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar();

var_dump($pessoa->nome);