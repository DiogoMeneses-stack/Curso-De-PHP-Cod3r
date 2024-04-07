<div class="titulo">Interpolação</div>
<?php

$numero = 10;
$br = '<br>';

echo $numero;

echo $br . '$numero';
echo $br . "$numero";

$texto = "Sua nota é: $numero";
echo $br . $texto;

$objeto = 'caneta';
echo $br.'Eu tenho 5 '. $objeto;
echo "$br Eu tenho 5  {$objeto}s";