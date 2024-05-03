<div class="titulo">Funções de Recursividade</div>

<?php

// Desafio do Fatorial com Recursividade
echo "Desafio do Fatorial com Recursividade: <br>";
function fatorial($numero){
    if($numero <= 1){
        $numero = $numero;
    } else {
        $numero *= fatorial($numero - 1);
    }
    return $numero;
}

$num = 9;
echo $num . "! = " . fatorial($num) . '<br>';

//Função ternária
function fatorialTernaria($numero){
    return $numero <= 1 ? 1 :
    $numero * fatorialTernaria($numero - 1);
}

echo $num . "! = " . fatorialTernaria($num);
echo "<br>============Código em Aula ================<br>";


function soma($a){
    $somar = 0;
    for($i = 1; $i <= $a; $i++){
        $somar += $i;
        //echo $a;
        //break;
    }
    return $somar;
}

echo soma(9) . '<br>';

function somaRecursiva($a){
    if($a === 1 ){ //Condição de Parada
        return 1;
    }
    return $a + somaRecursiva($a - 1);
}

echo somaRecursiva(9) . '<br>';

function somaRecurivaTernaria($a){
    return $a === 1 ? 1 :
    $a + somaRecurivaTernaria($a - 1);
}

echo somaRecurivaTernaria(9);
