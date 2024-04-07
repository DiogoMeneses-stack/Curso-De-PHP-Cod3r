<div class="titulo">Basico</div>
<?php
$numeroA = 13;
echo $numeroA, '<br>';
var_dump($numeroA);
echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
EcHo $soma;

echo '<br>';
echo isset($soma);

unset($soma);
echo '<br>';
echo !isset($soma);

echo '<br>';
var_dump($soma);

$variavel = 10;
echo '<br>'. $variavel;

$variavel = "Agora Sou String";
echo '<br>'. $variavel;

// NOmes de Variáveis
$var = 'válida';
$var2 = 'valida';
$VAR3 = 'valida';
$_VAR_4 = 'valida';
$vâr5 = 'valida'; // evitar
// $6var = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);
