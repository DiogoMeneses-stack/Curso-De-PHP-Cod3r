<div class="titulo">Switch Case</div>
<?php

$categoria = 'luxo';
$preco = 0.0;
$carro = '';

if ($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria === 'SUV') {
    $carro = 'Rengade';
    $preco = 800000;
} elseif ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 550000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFaturado = number_format($preco, 2, ',', '.');
echo "<p>Carro : $carro <br> Preço: R$ $precoFaturado</p>";


switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    case 'SUV':
        $carro = 'Renegade';
        $preco = 250000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 300000;
        break;
}

$precoFaturado = number_format($preco, 2, ',', '.');
echo "<p>Carro : $carro <br> Preço: R$ $precoFaturado</p>";

?>