<div class="titulo">Arrays Básicos</div>
<?php
$lista = array(1, 2, 3.4, "texto");

echo $lista . '<br>';
var_dump($lista);

echo '<br>';
print_r($lista); // imprimir valores do array

echo '<br>' . $lista[0]; //acessar elementos do array

echo '<br>';
$texto = 'Esse é um texto';
echo '<br>' . $texto[0];