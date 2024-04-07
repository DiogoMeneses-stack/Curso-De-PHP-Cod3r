<div class="titulo">Desafio PI</div>
<?php
//
$br = "<br>";
echo pi();
$pi = 3.14;

echo $br;
var_dump($pi);
echo $br;
var_dump(pi());
echo $br;

if ($pi <=> pi()) {
    echo "Iguais";
} else {
    echo "Diferentes";
}

echo $br . "Solução do Professor: ";
if ($pi - pi() <= 0.01 && pi() - $pi <= 0.01) {
    echo "<br>Praticamente iguais";
} else {
    echo "<br>Valor errado!!";
}

//Operador relacional deve igualar a função PI e $pi