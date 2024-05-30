<?php
echo 'Carregado include_arquivo<br>';

$var = 'Está definida';

if(!function_exists('sum')){
    function sum($a, $b)
    {
        return $a + $b;
    }
}

