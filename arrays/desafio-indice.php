<div class="titulo">Desafio Indice</div>
<?php
$lista = array(
    1, //1
    4 => 2, // true
    3 => 3, // true
    'a' => 4, // false
    5, // true
    '9' => 6, // true
    '06' => 7, // true
    0 => 8 // true
);
// Array( [0] => 8 [4] => 2 [3] => 3 [a] => 4 [5] => 5 [9] => 6 [06] => 7)
print_r($lista);
