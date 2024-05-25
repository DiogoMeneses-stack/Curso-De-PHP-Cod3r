<div class="titulo">Polimorfismo</div>

<?php

    class Comida{
        public $peso;
    }

    class Arroz extends Comida{

    }

    class sorvete extends Comida{

    }

    class Pessoa{
        public $peso;

        function __construct($peso)
        {
            $this->peso = $peso;
            
        }

        function comer(Comida $comida){ // Isso é Polimorfismso em PHP
            $this->peso += $comida->peso;
        }
    }

    $comida_01 = new Arroz();
    $comida_01->peso = 0.5;
    
    $comida_02 = new Sorvete();
    $comida_02->peso = 0.5;

    $pessoa = new Pessoa(83, 45);
    $pessoa->comer($comida_01);
    $pessoa->comer($comida_02);

    echo $pessoa->peso;
    