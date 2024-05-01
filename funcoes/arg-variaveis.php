<div class="titulo">Argumentos e Variáveis</div>

<?php

function soma($a, $b)
{
    return $a + $b;
}

echo soma(4, 5) . '<br>';
echo soma(6, 9) . '<br>';

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}



echo somaCompleta(1, 2, 3) . '<br>';

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependentes: $dep <br>";
        }
    }
}

echo '<br>';
membros("Roberto", "Junior");