<div class="titulo">Operadro Ternário</div>
<?php
$idade = 70;
$status;

if ($idade >= 18) {
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}

echo "$status <br>";

$status = $idade >= 18 ? 'Maior de idade' : 'Menor de Idade';
//$var = condição ? verdadeiro : falso;
echo "$status <br>";
?>