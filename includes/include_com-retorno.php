<div class="titulo">Include com Retorno</div>

<?php
    echo 'Include com retorno: <br>';
    include('arquivo_retornado.php');
    require('arquivo_retornado.php');

    echo $a;