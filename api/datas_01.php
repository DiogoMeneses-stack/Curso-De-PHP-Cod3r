<div class="titulo">Datas #01</div>

<?php
    echo time() . '<br>';
    echo date('D, d \d\e M \d\e Y H:i A') . '<br>';
    
    echo strftime('%A, %d de %B de %Y' . '<br>', time()); // depressiado
    
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Parana');
    echo strftime('%A, %d de %B de %Y', strtotime('today')) . '<br>';
    echo utf8_encode(ucwords(strftime('%A, %d de %B de %Y', $amanha))) . '<br>';

    $amanha = time() + (24 * 60 * 60);
    echo strftime('%A, %d de %B de %Y' . '<br>');

    $proximaSemana = strtotime('+1 week');
    echo strftime('%A, %d de %B de %Y', $proximaSemana) . '<br>';

    setlocale(LC_ALL, 'pt-BR.utf-8',);
    $dataFixa = mktime(15, 30, 05, 1, 25, 1975);
    echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);