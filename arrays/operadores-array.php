<div class="titulo">Operadores Array</div>
<?php
$dados1 = [
    "nome" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

const BR = '<br>';
echo BR . is_array($dadosCompletos);
echo BR . count($dadosCompletos);
echo BR . array_rand($dadosCompletos);

echo BR;
echo "{$dadosCompletos['idade']}";
echo "${dadosCompletos['idade']}";

unset($dadosCompletos["nome"]); //remover dados
echo BR;
print_r($dadosCompletos);
var_dump($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8, 10];

$decimais = $pares + $impares; //cuidado que isso subsescreve o valor de um array
echo BR;
print_r($decimais);

$decimais = array_merge($pares, $impares); // ordenas as chaves
echo BR;
print_r($decimais);

sort($decimais); // ordena o array inteiro
echo BR;
print_r($decimais);
