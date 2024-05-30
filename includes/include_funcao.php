<div class="titulo">Includes de uma Função</div>

<?php
    echo 'Arquivo carregado <br>';

    function carregarOutroArquivo(){
        include('include_arquivo.php');

        echo $var . '<br>';
        echo sum(2, 5) . '<br>';
    }

    echo 'Um arquivo include_funcao<br>';
    //echo sum(9, 9) . '<br>';
    carregarOutroArquivo();

    echo "Variável ={$var}";
    //var_dump($var);
    echo '<br>' . sum(3, 8);