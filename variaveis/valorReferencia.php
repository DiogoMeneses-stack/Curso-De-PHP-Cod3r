<div class="titulo">Valor vs Referencia</div>
<?php
$br = '<br>';
$variavel = 'valor final';
echo $variavel;


// Atribuição por Valor
$variavelValor = $variavel;
echo $br . $variavelValor;
$variavelValor = 'novo valor';
echo $br . $variavel;
echo$br . $variavelValor;

// Atribução por Referencia
$variavelRefencia = &$variavel;
$variavelRefencia = 'mesma referencia'; //<== essa que está Valendo

echo $br . $variavelRefencia;
