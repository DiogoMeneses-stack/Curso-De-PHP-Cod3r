<div class="titulo">Variaveis Variaveis</div>

<?php

$br = '<br>';

$a = 'mundo';
$$a = 'Olá'; // Sinistro
$$$a = 'Banana'; //Sinistro

echo $$a.' '.$a. ' '. $$$a;

$epa = 'opa';
$opa = 'Vish';
echo "$br $epa {$$epa}";