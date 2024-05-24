<div class="titulo">Modificadores Final</div>

<?php

// modificador que não permite gerar herança.

abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2(){
        echo 'Não muda nada <br>';
    }
}

class Classe extends Abstrata{
    public function metodo1(){

    }
}

$classe = new Classe('');
$classe->metodo1();
//$classe->metodo2(); --- > não pode

