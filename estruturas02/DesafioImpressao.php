<div class="titulo">Desafio de Impressao</div>
<p>
    <?php
    /*
    --Imprima apenas os valores do array que contém indice par
    --Desafio adicional: resolver com for e foreach
    --valores esperados: AAA, CCC, EEE
    
    
    */
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];
    echo "Usando for:<br>";

    for ($i = 0; $i < count($array); $i++) {
        if ($i % 2 == 0) {
            echo $array[$i] . "<br>";
        }
    }
    ?>
</p>
<p>
    <?php
    $array = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];
    echo " Não usando for:<br>";
    foreach ($array as $indice => $valor) {
        if ($indice % 2 == 0) {
            echo $valor . "<br>";
        }
    }


    ?>
</p>
<p>
    <?php
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    echo "Outro desafio:<br>";

    for ($t = 0; $t < count($array); $t++) {
        if ($t % 2) {
            echo $array[$t] . "<br>";
        }
    }

    echo "<hr>";

    foreach ($array as $iniciar => $elementos) {
        if ($iniciar % 2 ) {
            echo $elementos . "<br>";
        }
    }

    ?>

    <?php
    // for($i = 0; $i < count($array); $i++){
    //     if($i % 2 === 1) continue;
    //     echo "{$array[$i]} <br>";
    // }
    
    // foreach($array as $chave => $valor){
    //     if($chave % 2 !== 0) continue;
    //     echo "$valor <br>";
    // }
    
    ?>
</p>