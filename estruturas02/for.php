<div class="titulo">Laço For</div>
<?php

// for($variavel= valor; condição; icremento ){}

for ($cont = 1; $cont <= 5; $cont++) {
    echo "$cont <br>";
}
echo "<hr>";
for (; $cont <= 10; $cont++) {
    echo "$cont <br>";
}
echo "<hr>";
for (; $cont <= 15;) {
    echo "$cont <br>";
    $cont++;
}
echo "<hr>";

$array = [
    'Domingo', 'Segunda', 'Terça', 'Quarta',
    'Quinta', 'Sexta', 'Sábado'
];

print_r($array);
echo "<hr>";
echo '<br>';
for ($i = 1; $i <= count($array); $i++) {
    echo "{$array[$i]} <br>";
}

echo "<hr>";

$matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];

echo "<hr>";

for ($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j <= count($matrix[$i]); $j++){
        echo "{$matrix[$i][$j]}<br>";
    }
}

?>