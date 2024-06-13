<div class="titulo">Data #02</div>
<?php
    $espaço = '<br>';
    $formatoData_01 = 'D, d \d\e M \d\e Y';
    $formatoData_02 = '%A, %d de %B de %Y';
    $formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

    $agora = new DateTime();

    // print_r($agora);
    // echo $espaço;

    setlocale(LC_TIME, 'pt_BR');
    //echo $agora->format($formatoData_01) . $espaço;
    echo strftime($formatoData_02, $agora->getTimestamp()) . $espaço;

    $amanha = new DateTime('+2 week');
    echo strftime($formatoData_02, $amanha->getTimestamp()) . $espaço;

    $dataFixa = new DateTime('1975-01-25 15:30:50');
    echo strftime($formatoDataHora, $dataFixa->getTimestamp()) . $espaço;

    $amanha->modify('+1 day');
    echo strftime($formatoDataHora, $amanha->getTimestamp()) . $espaço;

    $amanha->setDate(2000, 5, 20);
    echo strftime($formatoDataHora, $amanha->getTimestamp()) . $espaço;

    $dataPassada = new DateTime('2000-05-17');
    $dataFutura = new DateTime('2030-11-26');
    $outraData = new DateTime('2030-11-26');
    echo($amanha > $dataPassada ? 'Maior' : 'Menor') . $espaço;
    echo($amanha > $dataFutura ? 'Maior' : 'Menor') . $espaço;
    echo($amanha === $outraData ? 'Igual' : 'Diferente') . $espaço;

    echo $espaço;

    $tz = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime(null, $tz);
    echo $agora->format('d/M/Y H:i:s');

