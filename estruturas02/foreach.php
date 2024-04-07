<div class="titulo">Foreach</div>
<?php

$array = [
    'Domingo', 'Segunda', 'Terça', 'Quarta',
    'Quinta', 'Sexta', 'Sábado'
];

foreach ($array as $valor) {
    echo "$valor <br>";
}

echo "<br>";

foreach ($array as $indice => $valor) {
    echo "$indice => $valor <br>";
}

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

foreach ($matrix as  $linha) {
    foreach ($linha as $valor) {
        echo "$valor";
    }
    echo "<br>";
}


$numero = [1, 2, 3, 4, 5];
foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numero);