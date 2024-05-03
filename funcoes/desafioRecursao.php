<div class="titulo">Desafio de Recursividade</div>

<?php

    /*
    $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
    >1
    >2
    >>3
    >>4
    >>5
    >6
    >>7
    >>>8
    >>>9
    >10
    
    */

    $numeros = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

    function imprimirNumeros($numeros, $etapa = '>'){
        foreach ($numeros as $valores) {
            if(is_array($valores)){
                imprimirNumeros($valores, $etapa . $etapa[0]);
            } else {
                echo "$etapa $valores<br>";
            }
        }
    }

    imprimirNumeros($numeros);
    imprimirNumeros($numeros, '#');