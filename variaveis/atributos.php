<div class="titulo">Atributos</div>
<?php

$espaco = '<br>';
$title = 'Atribuição';
$numero = 10;

echo $espaco . $numero;

$numero = $numero - 3;
echo $espaco . $numero;

$numero = $numero + 1.5;
echo $espaco . $numero;

$numero--;
echo $espaco . $numero;

++$numero;
echo $espaco . $numero;

$numero += 5;
echo $espaco . $numero;

$texto = '<h1> Esse é um Texto</h1>';
print_r($texto);
$texto2 = '<h1> Esse Outro Texto</h1>';
print_r($texto2);