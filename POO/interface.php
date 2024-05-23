<div class="titulo">Interfaces</div>

<?php

//todos os métodos de interface são públicos

interface Animal{
    function respirar();
}

interface Canino{
    function latir(): string;
}

class Cachorro implements Animal, Canino{
    function respirar(){
        return "Irei Respirar.<br>";
    }

    function latir() : string{
        return 'au au au au au ';
    }
}

$animal1 = new Cachorro();
echo $animal1->respirar();
echo $animal1->latir(). "<br>";

var_dump($animal1 instanceof Cachorro);