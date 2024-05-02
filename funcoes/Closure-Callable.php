<div class="titulo">Closure e Callable</div>

<?php

    $soma1 = function($a, $b){
        return $a + $b;
    };

    echo $soma1(2 ,1) . '<br>';
    echo is_callable(($soma1) ? 'Sim' : 'Não' ) . '<br>';

    $soma1 = 1;
    echo is_callable(($soma1) ? 'Sim' : 'Não') . '<br>';

    //var_dump($soma1);

    function executar($a, $b, $op, Callable $funcao){
        $resultado = $funcao($a, $b) ?? 'Nada';
        echo "$a $op $b = $resultado<br>";
    }

    echo executar(2, 3, '+', $soma1);
