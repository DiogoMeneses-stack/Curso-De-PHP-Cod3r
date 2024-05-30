<div class="titulo">Includes</div>

<?php
    echo 'Executando Primeira linha<br>';
    include('include_arquivo.php');
    //include('include_arquivo.php');

    echo sum(3, 8) . '<br>';
    echo "Conteúdo da variável {$var}";