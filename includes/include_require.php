<div class="titulo">Include vs Require</div>

<?php
    
    echo 'usando arquivo com arquivo não existente: <br>';
    ini_set('display_errors', 1);
    include('arquivo_0.php');
    echo 'Não existe o arquivo chamado';

    echo 'Agora Usando o require: <br>';
    require('arquivo_0.php');
    echo 'Isso não será impresso';