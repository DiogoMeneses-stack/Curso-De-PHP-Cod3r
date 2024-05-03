<div class="titulo">Map e Filter</div>

<?php

$notas = [5.6, 5.8, 7.3, 9.8];
$notasFinais1 = [];

foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}

print_r($notasFinais1);

echo '<br>';
$notasFinais2 = array_map('round', $notas);
print_r($notasFinais2);

$apenasAprovados1 = [];

foreach ($notas as $nota) {
    if($nota >= 7){
        $apenasAprovados1[] = $nota;
    }
}

echo '<br>';
print_r($apenasAprovados1);

function aprovados($nota){
    return $nota >= 7;
}

echo '<br>';
$apenasAprovados2 = array_filter($notas, 'aprovados');
print_r(apenasAprovados2);

function calculoLegal($nota){
    $notaFInal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}

echo '<br>';
$notasFinais3 = array_map('round', $notas);
print_r($notasFinais2);