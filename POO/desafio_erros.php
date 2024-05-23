<div class="titulo">Desafio dos 7 erros</div>

<?php

interface Template{ // interface não é função
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template{ // toda interface usa implements não extends
    public function metodo1(){
        echo "erro 01<br>";
    }
    public function metodo2($parametro){ // não chamou o contrato da interface
        echo "Toda interface possuí um contrato ou seja objetos precisam seguir o contrato.<br>";
    }

    public function metodo3(){
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata{ // usar extends não implements 
    function __construct($parametro){
    }

    function metodo1(){}
    public function metodo2($parametro){}

}

$exemplo = new Classe('...'); // não chamou o new 
$exemplo->metodo3(); // usa esse sinal -> e essa função não existe em Classe mas está na classe abstrata

