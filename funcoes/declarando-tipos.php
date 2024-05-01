<div class="titulo">Usando Tipos</div>

<?php

function somar1(int $a, int $b){
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(1, 2) . '<br>';
echo somar1(3, 2) . '<br>';
echo somar1(5, 9) . '<br>';
echo somar1(2.222, 1.7) . '<br>';
echo '====================Somar2<br>';

function somar2($a, $b):int{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(1, 2) . '<br>';
echo somar2(3, 2) . '<br>';
echo somar2(5, 9) . '<br>';
echo somar2(2.222, 1.7) . '<br>';

echo '====================Somar3<br>';

function somar3($a, $b):float{
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar3(1, 2) . '<br>';
echo somar3(3, 2) . '<br>';
echo somar3(5, 9) . '<br>';
echo somar3(2.222, 1.7) . '<br>';
